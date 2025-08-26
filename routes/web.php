<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContpaqiController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Administrador accede a todo, así que puede pasar por cualquier grupo

// Soporte + Admin
Route::middleware(['auth', 'role:Soporte|Administrador'])->group(function () {
    Route::view('upolizas', 'livewire.upolizas.index');
    Route::view('polizas', 'livewire.polizas.index');
    Route::view('soportes', 'livewire.soportes.index');
});

// Contabilidad + Admin
Route::middleware(['auth', 'role:Contabilidad|Administrador'])->group(function () {
    Route::view('contribuyentes', 'livewire.contribuyentes.index');
    Route::get('/bitacora', function () {
    return view('livewire.bitacora.index');
})->name('bitacora.index');
});


// Ventas + Admin
Route::middleware(['auth', 'role:Ventas|Administrador'])->group(function () {
    Route::view('ventas', 'livewire.ventas.index');
});

// Contabilidad + Admin
Route::middleware(['auth', 'role:Contabilidad|Administrador'])->group(function () {
    Route::view('contribuyentes', 'livewire.contribuyentes.index');
});

// Compartido entre Soporte, Ventas y Admin
Route::middleware(['auth', 'role:Soporte|Ventas|Administrador'])->group(function () {
    Route::view('aspels', 'livewire.aspels.index');
    Route::view('contpaqis', 'livewire.contpaqis.index');
    Route::view('hosts', 'livewire.hosts.index');
});

// Rutas sin restricción por rol, solo autenticación
Route::middleware(['auth'])->group(function () {
    Route::view('clientes', 'livewire.clientes.index');
    Route::view('amenazas', 'livewire.amenazas.index');
});


// Rutas para eventos (podrías protegerlas también si solo ciertos roles deben acceder)
Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);
Route::put('/events/{id}', [EventController::class, 'update']);

// Ruta para descargar certificados
Route::get('/contpaqis/download/{id}', [ContpaqiController::class, 'download'])->name('contpaqis.download');
