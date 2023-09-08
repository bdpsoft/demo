<?php

use App\Http\Livewire\Form;

Route::get('/', function () {
    return view('home', ['name' => 'James']);
});

\Illuminate\Support\Facades\Route::get('form', Form::class);
