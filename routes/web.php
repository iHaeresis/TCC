<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\EscolasController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CidController;
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

Route::get('/', [PagesController::class, 'index']);
Route::resource('/alunos', AlunosController::class);

Route::get('/escolas',[EscolasController::class, 'index']);
route::resource('/escolas', EscolasController::class);

Route::get('/cid',[Cid::class, 'index']);
route::resource('/cid', CidController::class);


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

