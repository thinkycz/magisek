<?php

namespace App\Imports;

use App\Services\CsvProductProcessor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductListCsvImport implements ToCollection, WithCustomCsvSettings, WithHeadingRow, WithChunkReading
{
    use Importable;

    /**
     * @var object
     */
    private $config;

    /**
     * @var callable
     */
    private $callback;

    public function __construct(callable $callback, $config = null)
    {
        $this->callback = $callback;
        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => $this->config->delimiter ?? ',',
        ];
    }

    /**
     * @return int
     */
    public function chunkSize(): int
    {
        return 500;
    }

    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $collection
            ->map(function ($value) {
                return CsvProductProcessor::transformHeadings($value, optional($this->config)->transform_headings);
            })
            ->each($this->callback);
    }
}
