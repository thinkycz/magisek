<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;

class HeurekaController extends Controller
{
    use DispatchesJobs;

    public function __invoke()
    {
        return view('admin.heureka.index');
    }
}
