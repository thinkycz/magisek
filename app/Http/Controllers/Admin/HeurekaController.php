<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\GenerateHeurekaXmlFeed;
use Illuminate\Foundation\Bus\DispatchesJobs;

class HeurekaController extends Controller
{
    use DispatchesJobs;

    public function __invoke()
    {
        $this->dispatch(new GenerateHeurekaXmlFeed());

        return view('admin.heureka.index');
    }
}
