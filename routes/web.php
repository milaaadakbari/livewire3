<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/',\App\Livewire\Users\UsersList::class)->name('users');
