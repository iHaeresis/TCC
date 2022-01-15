<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\EscolasController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CidsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Route::get('/alunos', [PagesController::class, 'alunos']);
Route::resource('/alunos', AlunosController::class);

Route::get('/escolas',[EscolasController::class, 'escolas']);
route::resource('/escolas', EscolasController::class);

Route::get('/cid',[Cid::class, 'cid']);
route::resource('/cid', CidsController::class);

Auth::routes();

Route::get('/about', [PagesController::class, 'about']);

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

