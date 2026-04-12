<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganismeController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

/* DASHBOARD */
Route::get('/dashboard', function () {
    $role = auth()->user()->role;

    return view($role === 'admin'
        ? 'dashboard.admin'
        : 'dashboard.basic');
})->middleware(['auth'])->name('dashboard');

/* ADMIN TEST */
Route::get('/admin', function () {
    return "ADMIN OK";
})->middleware(['auth', 'role:admin']);

/* USERS CRUD (solo admin) */
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('users', UserController::class);
});

/* ORGANISMES CRUD (solo admin) */
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('organismes', OrganismeController::class);
});