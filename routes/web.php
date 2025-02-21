<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {

    return view('home', ['courses' => Course::paginate(10)]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('courses/{id}/reservation', [CourseController::class, 'book']);
});

Route::resource('courses', CourseController::class)->except(['index', 'show']);

Route::resource('reservations', ReservationController::class);



require __DIR__ . '/auth.php';
