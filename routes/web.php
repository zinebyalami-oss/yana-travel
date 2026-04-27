<?php

use App\Livewire\TestPage;
use App\Models\Voyage;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $voyages = Voyage::all();
    return view('home',compact('voyages'));
});



Route::get('/test', function () {
    return view('components.test');
});

Route::get('/voyages', function () {
    return view('components.voyages');
});





