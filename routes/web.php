<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\maincontrollers;

Route::get('/', [maincontrollers::class, 'index'])->name('main');
