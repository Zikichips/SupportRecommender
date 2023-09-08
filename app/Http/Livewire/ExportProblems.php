<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExportProblems extends Component
{

    public $state = [];

    public function submit($value) {
        
        // $this->state[] = ['exportProblem' => $value];
        // $this->emit('mergeState', $this->state);


        $this->emit('goToStep', $value);
    }


    public function render()
    {
        return view('livewire.export-problems');
    }
}
