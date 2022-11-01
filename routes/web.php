<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\CarrosMarcaController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Marcas routes
    Route::get('/marcas', [CarrosMarcaController::class, 'index'])->name('marcas.index');
    Route::get('/marcas/create', [CarrosMarcaController::class, 'create'])->name('marcas.create');
    Route::get('/marcas/{id}/edit', [CarrosMarcaController::class, 'edit'])->name('marcas.edit');
    Route::get('/marcas/{id}/show', [CarrosMarcaController::class, 'show'])->name('marcas.show');
    Route::post('/marcas', [CarrosMarcaController::class, 'store'])->name('marcas.store');
    Route::put('/marcas/{id}', [CarrosMarcaController::class, 'update'])->name('marcas.update');
    Route::delete('/marcas/{id}', [CarrosMarcaController::class, 'destroy'])->name('marcas.destroy');

    Route::get('/carros', [CarroController::class, 'index'])->name('carros.index');
    Route::get('/carros/create', [CarroController::class, 'create'])->name('carros.create');
    Route::get('/carros/{id}/edit', [CarroController::class, 'edit'])->name('carros.edit');
    Route::get('/carros/{id}/show', [CarroController::class, 'show'])->name('carros.show');
    Route::post('/carros', [CarroController::class, 'store'])->name('carros.store');
    Route::put('/carros/{id}', [CarroController::class, 'update'])->name('carros.update');
    Route::delete('/carros/{id}', [CarroController::class, 'destroy'])->name('carros.destroy');

});
