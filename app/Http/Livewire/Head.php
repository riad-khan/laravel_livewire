<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Head extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.head');
    }

}
