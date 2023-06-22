<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('/')->group(function () {

    Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

    Route::get('/cours', [\App\Http\Controllers\CourseController::class, 'index'])->name('course.index');

    Route::get('/exercices', [\App\Http\Controllers\CourseController::class, 'index'])->name('exercice.index');

    Route::get('/cours/{slug}-{id}', [\App\Http\Controllers\CourseController::class, 'showSlug'])
        ->where(['slug' => '[a-z0-9]+(?:-[a-z0-9]+)*', 'id' => '[0-9]+'])
        ->name('course.showSlug');

    Route::get('/ecole', [\App\Http\Controllers\SchoolController::class, 'index'])->name('school.index');

    Route::get('/ecole/show', [\App\Http\Controllers\SchoolController::class, 'show'])->name('school.show');

    Route::get('/formateur', [\App\Http\Controllers\TrainerController::class, 'index'])->name('trainer.index');

    Route::get('/about', \App\Http\Controllers\AboutController::class)->name('about');

    Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');

    Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.send');

    Route::get('/search', \App\Http\Controllers\SearchController::class)->name('search');

    Route::get('/mentions-legals', \App\Http\Controllers\LegalNoticeController::class)->name('legal.notice');

    Route::get('/politique-de-confidentiality', \App\Http\Controllers\PrivacyPolicyController::class)->name('privacy.policy');

    Route::get('/cgu', \App\Http\Controllers\CguController::class)->name('cgu');

    Route::get('/politique-de-cookies', \App\Http\Controllers\CookiePolicyController::class)->name('cookie.policy');

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    require __DIR__ . '/auth.php';
});


Route::prefix('/dashboard')->middleware(['auth', 'verified', 'superadmin'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard.index');

    Route::get('/users', [\App\Http\Controllers\Dashboard\UserController::class, 'index'])->name('users.index');

    Route::get('/statistics', [\App\Http\Controllers\Dashboard\StatisticController::class, 'index'])->name('statistics.index');
});





