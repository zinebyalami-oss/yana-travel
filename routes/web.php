<?php

use App\Livewire\TestPage;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('home');
});



Route::get('/test', TestPage::class);

Route::get('/voyages', function () {
    return view('components.voyages');
});




