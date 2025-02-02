<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'HomePage'])->name('HomePage');
Route::get('/profile', [SiteController::class, 'ProfilePage'])->name('ProfilePage');
