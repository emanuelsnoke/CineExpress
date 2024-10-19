<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssentoController;

Route::get('/assentos', [AssentoController::class, 'index']);
Route::post('/assentos/reservar', [AssentoController::class, 'reservar']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/DemonSlayer', function() {
    return view('demonslayer');
});

Route::get('/MadameTeia', function() {
    return view('madameTeia');
});

Route::get('/O-Mal-Que-Habita-Em-Nos', function() {
    return view('o-mal-que-habita-em-nos');
});

Route::get('/EmBreve', function() {
    return view('Embreve');
});

Route::get('/Cadastro', function() {
    return view('cadastro');
});

Route::get('/Login', function() {
    return view('login');
});

Route::get('/Reservas-DemonsSlayer', function() {
    return view('reservas_Demons');
});

Route::get('/Reservas-MadameTeia', function() {
    return view('reservas_Madame');
});

Route::get('/Reservas-O-Mal-Que-Habita-Em-Nos', function() {
    return view('reservas_Omal');
});

require __DIR__.'/auth.php';
