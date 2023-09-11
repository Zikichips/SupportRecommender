<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImportProblems extends Component
{

    public function submit($value) {
        

        $this->emit('goToStep', $value);
    }

    // public function goBack() {

    //     $this->emit('goToStep', 1);
    // }


    public function render()
    {
        return view('livewire.import-problems');
    }
}
