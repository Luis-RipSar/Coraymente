<?php

use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserManagementController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('public.inicio'))->name('inicio');

Route::view('/clinicas/almoradi', 'public.clinicas.almoradi')
     ->name('clinicas.almoradi');
Route::view('/clinicas/elche',     'public.clinicas.elche')
     ->name('clinicas.elche');

Route::view('/equipo',     'public.equipo')->name('equipo');
Route::view('/servicios',  'public.servicios')->name('servicios');
Route::view('/formacion',  'public.formacion')->name('formacion');
Route::view('/contacto',   'public.contacto')->name('contacto');

Route::get('/publicaciones',               [PublicationController::class, 'index'])
     ->name('publicaciones.index');
Route::get('/publicaciones/{publication}', [PublicationController::class, 'show'])
     ->name('publicaciones.show');


/*
|--------------------------------------------------------------------------
| Authenticated & Verified Routes
|--------------------------------------------------------------------------
|
| Aquí colocamos TODO lo que requiera login y verificación de email.
| Primero definimos /dashboard “unificado”, luego resto de rutas de usuario.
|
*/
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard unificado: si es admin redirige a admin.dashboard
    Route::get('/dashboard', function (Request $request) {
        if ($request->user()->role_id == 1) {
            return redirect()->route('admin.dashboard');
        }
        return view('dashboard');
    })->name('dashboard');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','verified', AdminMiddleware::class])
     ->prefix('admin')
     ->name('admin.')
     ->group(function () {
         // Dashboard específico de admin
         Route::get('/dashboard', fn() => view('admin.dashboard'))
              ->name('dashboard');

         // Aquí puedes añadir rutas de gestión de roles, configuración, etc.
         // Ejemplo:
         // Route::resource('/roles', RoleManagementController::class);

         // Gestión de usuarios (para roles permitidos)
          Route::get('pacientes', 
             [UserManagementController::class, 'pacientesIndex'])
             ->name('usuarios.index');
          Route::get('/usuarios/create', [UserManagementController::class, 'create'])
             ->name('usuarios.create');
          Route::get('/usuarios/{usuario}/edit', [UserManagementController::class, 'edit'])
            ->name('usuarios.edit');
          Route::delete('/usuarios/{usuario}', [UserManagementController::class, 'destroy'])
            ->name('usuarios.delete');

          // Gestion de profesionales
          Route::get('profesionales', 
             [UserManagementController::class, 'profesionalesIndex'])
             ->name('profesionales.index');
          Route::get('/profesionales/create', [UserManagementController::class, 'profesionalCreate'])
             ->name('profesionales.create');
          Route::get('/profesionales/{usuario}/edit', [UserManagementController::class, 'profesionalEdit'])
            ->name('profesionales.edit');
          Route::delete('/profesionales/{usuario}', [UserManagementController::class, 'destroy'])
            ->name('profesionales.delete');

            // Gestion de publicaciones
          Route::get('publicaciones', [PublicationController::class,'adminIndex'])
              ->name('publicaciones.index');
          Route::get('publicaciones/create', [PublicationController::class,'create'])
              ->name('publicaciones.create');
          Route::get('publicaciones/{publication}/edit', [PublicationController::class,'edit'])
              ->name('publicaciones.edit');
          Route::delete('publicaciones/{publication}', [PublicationController::class,'destroy'])
              ->name('publicaciones.destroy');
          Route::post('publicaciones', [PublicationController::class,'store'])
               ->name('publicaciones.store');
          Route::put('publicaciones/{publication}', [PublicationController::class,'update'])
               ->name('publicaciones.update');

               
          Route::resource('usuarios', UserManagementController::class)
             ->except(['index']);
     });

/*
|--------------------------------------------------------------------------
| Profesional Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','verified'])
     ->prefix('profesional')
     ->name('profesional.')
     ->group(function(){
         // Dashboard
         Route::get('dashboard', [ProfesionalController::class, 'index'])
              ->name('dashboard');

         Route::get('perfil', [ProfesionalController::class, 'settings'])
              ->name('perfil');

         Route::put('perfil', [ProfesionalController::class, 'updatePerfil'])
              ->name('perfil.update');

         Route::put('password', [ProfesionalController::class, 'updatePassword'])
               ->name('password.update');
     });

require __DIR__.'/auth.php';