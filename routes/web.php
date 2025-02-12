<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Login;
use App\Livewire\Contact;
use App\Livewire\Timeline;
use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Show as UsersShow;
use App\Http\Controllers\LogoutController;
use App\Livewire\Users\Index as UsersIndex;

Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/timeline', Timeline::class)->name('timeline');
    Route::get('/users', UsersIndex::class)->name('users');
    Route::get('/users/{user}', UsersShow::class)->name('users.show');
    Route::post('/logout', LogoutController::class)->name('logout');
});

Route::get('/login', Login::class)->name('login')->middleware('guest');
