<?php

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;

class Home extends Component
{
    public $data = [];
    public function render()
    {
        return view('livewire.home')
            ->extends('layouts.app')
            ->section('content');;;
    }
    public function mount(){
        $json = json_decode(file_get_contents('https://riadhossain.me/api/news'), true);
       $this->data =$json['news'];



    }
}
