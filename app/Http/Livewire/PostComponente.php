<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostComponente extends Component
{

    private $noticia;

    public function mount($noticia = null){
        $this->noticia = "php artisan make:livewire Componente";
    }

    public function render()
    {
        return view('livewire.post-componente', ['noticia'=> $this->noticia]);
    }
}
