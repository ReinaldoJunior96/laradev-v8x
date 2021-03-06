<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('livros')->group(function () {
    Route::get('/premium', [LivroController::class, 'livrosPagos'])->name('livros.premium');
});
Route::resource('livros', LivroController::class);


Route::fallback(function () {
    return "nenhuma rota encontrada";
});
