<?php

use App\Http\Controllers\OrganismeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['forcehttps'])->group(function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/info', 'info')->name('info');
    Route::view('/validacio-error', 'auth.validation-error')->name('validation.error');

    require __DIR__ . '/auth.php';

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            $view = auth()->user()->role === 'gestor'
                ? 'dashboard.gestor'
                : 'dashboard.consultor';

            return view($view);
        })->name('dashboard');

        Route::get('/certificat-usuari', [PdfController::class, 'userCertificat'])
            ->name('pdf.certificat');

        Route::get('/organismes', [OrganismeController::class, 'index'])
            ->name('organismes.index')
            ->middleware('role:gestor,consultor');

        Route::get('/organismes/{organisme}', [OrganismeController::class, 'show'])
            ->name('organismes.show')
            ->middleware('role:gestor,consultor');

        Route::middleware('role:gestor')->group(function () {
            Route::get('/users', [UserController::class, 'index'])->name('users.index');
            Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
            Route::post('/users', [UserController::class, 'store'])->name('users.store');
            Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
            Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
            Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
            Route::get('/users-pdf', [UserController::class, 'pdf'])->name('users.pdf');

            Route::get('/organismes/create', [OrganismeController::class, 'create'])->name('organismes.create');
            Route::post('/organismes', [OrganismeController::class, 'store'])->name('organismes.store');
            Route::get('/organismes/{organisme}/edit', [OrganismeController::class, 'edit'])->name('organismes.edit');
            Route::put('/organismes/{organisme}', [OrganismeController::class, 'update'])->name('organismes.update');
            Route::delete('/organismes/{organisme}', [OrganismeController::class, 'destroy'])->name('organismes.destroy');
            Route::get('/organismes/{organisme}/pdf', [OrganismeController::class, 'pdf'])->name('organismes.pdf');
        });
    });
});
