<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{

    public $nome;
    public $desc;
    public $status;
    public $colors = array();
    public $fruta;
    public $form;

    public function mount(){
        $this->form = "Painel descritivo";
    }

    public function render()
    {
        return view('livewire.form');
    }
}
