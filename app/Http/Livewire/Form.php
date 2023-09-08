<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{

    public $step = 1;
    public $state = [];
    
    protected $listeners = ['mergeState', 'goToStep', 'store'];

    public function goToStep($step) {
        $this->step = $step;
    }


    public function mergeState($state) {
        $this->state = array_merge($this->state, $state);
    }

    public function render()
    {
        return view('livewire.form');
    }
}
