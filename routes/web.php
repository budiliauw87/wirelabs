<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Dashboard::class);
Route::get('/about', \App\Livewire\About::class);
Route::get('/feature', \App\Livewire\Feature::class);
