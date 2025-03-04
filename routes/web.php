<?php

use App\Http\Controllers\DashboardController;
use App\Http\Middleware\PreventAuthPagesWhenLogged;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GithubController;

Route::get('/', function () {
    return view('pages.auth.login');
})->middleware(PreventAuthPagesWhenLogged::class);
Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
})->name('logout');

Route::prefix('auth')->group(function () {

    Route::get('/github', [GithubController::class, 'redirect'])->name('github.login');
    Route::get('/github/callback', [GithubController::class, 'callback']);
})->middleware(PreventAuthPagesWhenLogged::class);


Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
})->middleware('auth');

