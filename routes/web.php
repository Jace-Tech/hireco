<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basic\HomeController;
use App\Http\Controllers\Basic\ProfileController;
use App\Http\Controllers\Basic\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\JobController;

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

// JOB HOME
Route::get('/job', [JobController::class, 'showJobs'])->name('job');
Route::get('/job/{job:id}', [JobController::class, 'singleJob'])->name('job.single');
Route::post('/job/{job:id}/apply', [JobController::class, 'apply'])->name('apply');

// APPLICANTS
Route::get('/applicant', [HomeController::class, 'index'])->name('applicant');
Route::get('/applicant/{id}', [ApplicantController::class, 'getApplicant'])->name('applicant.profile');

// COMPANY
Route::get('/company', [HomeController::class, 'index'])->name('company');

Route::middleware(['guest'])->group(function () {
    // REGISTER
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    // LOGIN
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // LINKEDIN LOGIN
    Route::post('/login/linkedin', [LoginController::class, 'linkedin'])->name("linkedin");
    Route::get('/login/linkedin/redirect', [LoginController::class, 'linkedinRedirect'])->name("linkedin.redirect");

    // FACEBOOK LOGIN 
    Route::get('/login/facebook', [LoginController::class, 'facebook'])->name("facebook");
    Route::get('/login/facebook/redirect', [LoginController::class, 'facebookRedirect'])->name("facebook.redirect");
});

Route::middleware(['auth'])->group(function () {
    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // JOBS
    Route::get('/dashboard/job/manage', [JobController::class, 'index'])->name('jobs');
    Route::get('/dashboard/job/create', [JobController::class, 'create'])->name('job.post');
    Route::post('/dashboard/job/create', [JobController::class, 'store']);

    Route::delete('/dashboard/job/applied/{job}', [JobController::class, 'deleteApplied'])->name('applied.delete');

    Route::get('/dashboard/job/{job:id}/edit', [JobController::class, 'edit'])->name('job.edit');
    Route::post('/dashboard/job/{job:id}/edit', [JobController::class, 'update']);
    
    Route::post('/dashboard/job/{job:id}/delete', [JobController::class, 'delete'])->name('job.delete');
    Route::get('/dashboard/job/{job:id}/applicants', [JobController::class, 'candidates'])->name('candidates');

    // PROFILE
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/dashboard/profile', [ProfileController::class, 'store']);

    // NOTE
    Route::post('/dashboard/note/', [NoteController::class, 'store'])->name('note');
    Route::delete('/dashboard/note/{id}', [NoteController::class, 'destroy'])->name('note.delete');
    Route::patch('/dashboard/note/{id}', [NoteController::class, 'update'])->name('note.update');

    // BOOKMARK
    Route::post('/applicant/{id}/bookmark', [ApplicantController::class, 'bookmark'])->name('applicant.bookmark');
    Route::delete('/applicant/{id}/bookmark', [ApplicantController::class, 'removeBookmark']);

    Route::get('/dashboard/bookmark', [BookmarkController::class, 'index'])->name('bookmark');
    
    // MESSAGE
    Route::get('/dashboard/message', [MessageController::class, 'index'])->name('message');
    Route::post('/dashboard/message', [MessageController::class, 'store']);
    Route::delete('/dashboard/message/{id}', [MessageController::class, 'delete']);
    Route::patch('/dashboard/message/{id}', [MessageController::class, 'update']);

    // review
    // Route::get('/dashboard/review', [ReviewController::class, 'index'])->name('review');
    // Route::post('/dashboard/review', [ReviewController::class, 'store']);
    // Route::delete('/dashboard/review/{id}', [ReviewController::class, 'delete']);
    // Route::patch('/dashboard/review/{id}', [ReviewController::class, 'update']);

    // LOGOUT
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/logout', [LoginController::class, 'logout']);


});
