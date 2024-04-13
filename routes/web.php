<?php

use App\Livewire\ArrivalForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/arrival/create', ArrivalForm::class)->name('arrive.view');
