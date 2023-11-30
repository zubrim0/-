<?php
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ParticipantsController;

Route::get('/', [YourController::class, 'головна'])->name('головна');
Route::view('/welcome', 'welcome')->name('welcome');
// Маршрути для сторінки реєстрації
Route::get('/registration', [RegistrationController::class, 'showRegistrationForm'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'register'])->name('register.submit');

// Маршрути для сторінки входу
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Маршрути для сторінки редагування профілю
Route::get('/edit-profile', [EditController::class, 'index'])->name('edit-profile');
Route::post('/edit-profile', [EditController::class, 'update'])->name('edit-profile.submit');

// Маршрути для списку учасників
Route::get('/participants', [ParticipantsController::class, 'index'])->name('participants');
Route::get('/participants/{participant}/edit', [ParticipantsController::class, 'edit'])->name('participants.edit');
Route::put('/participants/{participant}', [ParticipantsController::class, 'update'])->name('participants.update');

// Маршрут для домашньої сторінки
Route::get('/', function () {
    return view('welcome');
});
