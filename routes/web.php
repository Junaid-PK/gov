<?php

use App\Livewire\ArrivalForm;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/arrival/create', ArrivalForm::class)->name('arrive.view');
Route::get('/success', function(){
    return view('success');
})->name('success');

Route::get('/download/pdf', function(){
    $formId = Session::get('formid');
    $filePath = 'public/forms/FormArriving_' . $formId. '.pdf';
    if (Storage::exists($filePath)) {
        // If the file exists, download it
        return Storage::download($filePath);
    } else {
        // If the file does not exist, return a 404 error
        abort(404, 'File not found.');
    }
})->name('pdf-download');
