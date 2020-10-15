<?php

namespace App\Jobs;

use App\Models\Product;
use App\Tools\HeurekaGenerator;
use App\Tools\HeurekaItem;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class GenerateHeurekaXmlFeed implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $generator;
    private $filename;

    /**
     * Create a new job instance.
     * @param null $path
     */
    public function __construct($path = null)
    {
        $this->filename = $path ?: public_path('storage/heureka.xml');
        $this->generator = app(HeurekaGenerator::class);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->createFolderIfDoesNotExist(dirname($this->filename));
        $this->generator->beginGenerate($this->filename);

        foreach (Product::cursor() as $product) {
            /** @var Product $product */
            if ($product->hasPrice()) {
                $this->generator->generateItem(HeurekaItem::fromProduct($product));
            }
        }

        $this->generator->endGenerate();
    }

    private function createFolderIfDoesNotExist($path)
    {
        return tap($path, function ($path) {
            return is_dir($path) ? true : mkdir($path);
        });
    }
}
