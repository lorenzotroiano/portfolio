<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;
use App\Models\Technology;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');


    // Rotta per mostrare il form di creazione di un nuovo progetto
    Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::get('technology/create', [TechnologyController::class, 'create'])->name('technology.create');

    // Rotta per salvare un nuovo progetto nel database
    Route::post('project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::post('technology/store', [TechnologyController::class, 'store'])->name('technology.store');

    // Rotta per mostrare i dettagli di un progetto specifico
    Route::get('project/show/{id}', [ProjectController::class, 'show'])->name('project.show');
    Route::get('technology/show/{id}', [TechnologyController::class, 'show'])->name('technology.show');


    // Rotta per mostrare il form di modifica di un progetto esistente
    Route::get('project/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::get('technology/{id}/edit', [TechnologyController::class, 'edit'])->name('technology.edit');

    // Rotta per aggiornare un progetto esistente nel database
    Route::put('project/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::put('technology/{id}', [TechnologyController::class, 'update'])->name('technology.update');

    // Rotta per eliminare un progetto dal database
    Route::delete('project/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::delete('technology/{id}', [TechnologyController::class, 'destroy'])->name('technology.destroy');
});
