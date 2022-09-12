<?php

use App\Http\Controllers\jogosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Route::view("/jogos", "jogos");

// Route::get('/jogos', function () {
//     return "jogos";
// }); 


// Route::view('/jogos', 'jogos', ['name' => 'GTA']);

// Route::get('/jogos/{id?}/{name?}', function ($id = null, $name = null) {
//     return view('jogos', ['idJogo' => $id, 'nomeJogo' => $name]);
// })->where(['id' => '[0-9]+', 'name' => '[a-zA-z0-9]+']);


// Route::get('/jogos/{name?}', [jogosController::class, 'index']);

// Route::get('/jogos', function () {
//     return view('jogos');
// })->name('jogos');


Route::prefix('jogos')->group(function () {
    Route::get('/', [jogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [jogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [jogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [jogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [jogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [jogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});


Route::fallback(function () {
    return "ERRO 404";
});
