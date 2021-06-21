<?php

use Illuminate\Support\Facades\Route;
use App\http\Livewire\PostComponente;
use App\http\Livewire\User;
use App\http\Livewire\Form;
use App\http\Livewire\Prod\Produto;
use \App\Http\Livewire\Action;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/{noticia?}', PostComponente::class);
Route::get('user', User::class);
Route::get('/produto/{nome?}', Produto::class);
Route::get('/form', Form::class);
Route::get('/form-action', Action::class);
