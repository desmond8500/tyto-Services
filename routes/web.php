<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::livewire('/welcomepage', 'pages::welcome-page')->name('welcome-page');
