<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basic\HomeController;
use App\Http\Controllers\Basic\ProfileController;
use App\Http\Controllers\Basic\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/job', [HomeController::class, 'index'])->name('job');
Route::post('/job', [HomeController::class, 'index']);

Route::get('/applicant', [HomeController::class, 'index'])->name('applicant');

Route::get('/company', [HomeController::class, 'index'])->name('company');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::post('/login/linkedin', [LoginController::class, 'linkedin'])->name("linkedin");
    Route::get('/login/linkedin/redirect', [LoginController::class, 'linkedinRedirect'])->name("linkedin.redirect");

    Route::get('/login/facebook', [LoginController::class, 'facebook'])->name("facebook");
    Route::get('/login/facebook/redirect', [LoginController::class, 'facebookRedirect'])->name("facebook.redirect");
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/job/create', [HomeController::class, 'index'])->name('job.post');

    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
