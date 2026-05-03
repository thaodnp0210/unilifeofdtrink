<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestbookController;

Route::get('/', function () {
    return view('home');
});

Route::post('/guestbook', [GuestbookController::class, 'store'])
    ->name('guestbook.store');