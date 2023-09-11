<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImportOrExport extends Component
{


    public $state = [];

    public function submit($step) {
        
        // $this->state[] = ['importOrExport' => $step];
        // $this->emit('mergeState', $this->state);



        $this->emit('goToStep', $step);
    }



    public function render()
    {
        return view('livewire.import-or-export');
    }
}
