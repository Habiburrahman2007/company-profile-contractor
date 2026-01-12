<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Services;
use Illuminate\Support\Facades\Route;   

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/services', Services::class);

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
});
