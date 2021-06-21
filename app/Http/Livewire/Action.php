<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $total;
    public $texto;
    public $n1;
    public $n2;

    public function soma($n1, $n2){
        $this->total = $n1 + $n2;
    }

    public function displayMasagem($msg){
        $this->texto = $msg;
    }

    public function getSoma(){
        $this->total = $this->n1 + $this->n2;
    }

    public function parameterAction($tot){
        $this->total += $tot;
    }


    public function render()
    {
        return view('livewire.action');
    }
}
