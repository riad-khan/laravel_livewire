<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BMI extends Component

{
    public $height;
    public $heightUnit;
    public $weight;

    public function bmi(){
      dd($this->height.'+'.$this->heightUnit);
    }

    public function render()
    {
        return view('livewire.b-m-i')
            ->extends('layouts.app')
            ->section('content');;
    }

}
