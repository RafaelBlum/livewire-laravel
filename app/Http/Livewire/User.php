<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return <<<'blade'
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="text-dark m-1">
                            Componente Livewire inline
                    </div>

                    <div class="text-white m-1">
                        <div class="text-white">
                            <code>php artisan make:livewire NovoComponent --inline</code><br/>
                            <code>Backend app\http\livewire</code>
                        </div>
                    </div>
                </div>
        blade;
    }
}
