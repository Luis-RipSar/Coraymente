<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

// Rutas publicas
Route::get('/', fn() => view('public.inicio'))->name('inicio');
Route::view('/clinicas/almoradi', 'public.clinicas.almoradi')
     ->name('clinicas.almoradi');
Route::view('/clinicas/elche', 'public.clinicas.elche')
     ->name('clinicas.elche');
Route::view('/equipo', 'public.equipo')->name('equipo');
Route::view('/servicios', 'public.servicios')->name('servicios');
Route::view('/formacion', 'public.formacion')->name('formacion');
Route::get('/publicaciones', [PublicationController::class,'index'])->name('publicaciones.index');
Route::get('/publicaciones/{publication:slug}', [PublicationController::class,'show'])->name('publicaciones.show');
Route::view('/contacto', 'public.contacto')->name('contacto');

// Rutas privadas
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/usuarios', UserManagementController::class);
});

require __DIR__.'/auth.php';
