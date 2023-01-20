<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/ddd', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('cadastrorg/inicialrg');
})->middleware(['auth', 'verified'])->name('inicio');;


Route::get('/edit1', function () {
    return view('cadastrorg/edit1');
});


Route::get('/cadastrorg', 'App\Http\Controllers\CadastrorgController@sande')->middleware(['auth', 'verified'])->name('cadastrorg');
Route::get('/posts', 'App\Http\Controllers\CadastrorgController@index')->middleware(['auth', 'verified'])->name('post.create');
Route::post('/posts', 'App\Http\Controllers\CadastrorgController@store')->middleware(['auth', 'verified'])->name('post.store');

Route::get('/edit', 'App\Http\Controllers\CadastrorgController@push')->middleware(['auth', 'verified'])->name('post.push');

Route::post('/update', 'App\Http\Controllers\CadastrorgController@update')->middleware(['auth', 'verified'])->name('post.update');
Route::get('/update1/{id}', 'App\Http\Controllers\CadastrorgController@update1')->middleware(['auth', 'verified'])->name('post.update1');
Route::get('/pesquisar', 'App\Http\Controllers\CadastrorgController@pesquisar')->middleware(['auth', 'verified'])->name('post.pesquisa');
Route::post('/update2/{id}', 'App\Http\Controllers\CadastrorgController@update2')->middleware(['auth', 'verified'])->name('post.update2');
Route::get('/dashboard', function () {return view('dashboard');
    Route::get('/visual', 'App\Http\Controllers\CadastrorgController@visual')->middleware(['auth', 'verified'])->name('post.visualisar');    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
