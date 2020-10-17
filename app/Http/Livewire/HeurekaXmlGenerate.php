<?php

namespace App\Http\Livewire;

use App\Jobs\GenerateHeurekaXmlFeed;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Livewire\Component;

class HeurekaXmlGenerate extends Component
{
    use DispatchesJobs;

    public function render()
    {
        return view('livewire.heureka-xml-generate');
    }

    public function generate()
    {
        $this->dispatch(new GenerateHeurekaXmlFeed());

        $this->dispatchBrowserEvent('notify', __('heureka.generating'));
    }
}
