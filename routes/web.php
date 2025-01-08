<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('mainpage');
})->name('main');

Route::post('/send-contact', [ContactFormController::class, 'sendContact'])->name('send-contact');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');