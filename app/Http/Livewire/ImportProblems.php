<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImportProblems extends Component
{
    // public $state = [];

    public function submit($value) {
        
        // $this->state[] = ['importProblem' => $value];
        // $this->emit('mergeState', $this->state);


        $this->emit('goToStep', $value);
    }


    public function render()
    {
        return view('livewire.import-problems');
    }
}
