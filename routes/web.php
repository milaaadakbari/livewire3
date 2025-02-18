<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Admin\PanelPage;
use App\Livewire\Front\HomePage;
use App\Livewire\Users\UserDetails;
use App\Livewire\Users\UsersList;
use Illuminate\Support\Facades\Route;

//Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/', UsersList::class)->name('users');
Route::get('user_details/{user}', UserDetails::class)->name('users.details');


Route::get('home', HomePage::class)->name('home');
Route::get('panel', PanelPage::class)->name('panel');
