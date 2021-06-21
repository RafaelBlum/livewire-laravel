<?php

namespace App\Http\Livewire\Prod;

use Livewire\Component;

class Produto extends Component
{
    public $nome;

    public function mount($nome = null){
        $this->nome = $nome;
    }

    public function render()
    {
        return view('livewire.prod.produto');
    }
}
