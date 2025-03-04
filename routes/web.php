<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GithubController;

Route::get('/', function () {
    return view('pages.auth.login');
})->middleware(\App\Http\Middleware\PreventAuthPagesWhenLogged::class);

Route::prefix('auth')->group(function () {

    Route::get('/github', [GithubController::class, 'redirect'])->name('github.login');
    Route::get('/github/callback', [GithubController::class, 'callback']);
})->middleware(\App\Http\Middleware\PreventAuthPagesWhenLogged::class);
