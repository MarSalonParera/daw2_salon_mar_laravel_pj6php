<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganismeController;


use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Auth;

Route::middleware(['forcehttps'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });


    require __DIR__.'/auth.php';

    // PDF Certificat usuari autenticat
    Route::get('/certificat-usuari', [PdfController::class, 'userCertificat'])->middleware('auth')->name('pdf.certificat');

    // Logout
    Route::post('/logout', function() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('logout');

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
        Route::get('users/{user}/pdf', [UserController::class, 'pdf'])->name('users.pdf');
    });

    /* ORGANISMES CRUD (solo admin) */
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::resource('organismes', OrganismeController::class);
        Route::get('organismes/{organisme}/pdf', [OrganismeController::class, 'pdf'])->name('organismes.pdf');
    });
});