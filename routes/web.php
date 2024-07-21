<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Auth\ManualAuthController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VideoController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle']);
Route::get('oauth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
Route::get('auth/facebook', [SocialAuthController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);

Route::get('register', [ManualAuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [ManualAuthController::class, 'register']);
Route::get('login', [ManualAuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [ManualAuthController::class, 'login']);
Route::post('logout', [ManualAuthController::class, 'logout'])->name('logout');


Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::post('/delete-account', [MembershipController::class, 'delete'])->name('account.delete');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/{title}.html', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
});
