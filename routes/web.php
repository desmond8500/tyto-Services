<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome-page')->name('welcome-page');
Route::livewire('/welcomepage', 'pages::welcome-page')->name('welcome-page');
