<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GregmacController;
use App\Http\Controllers\ControllerApi;

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

Route::get('/', [GregmacController::class,'index']);

Route::get('/cursos', [GregmacController::class,'courses']);

Route::get('/curso/{id}', [GregmacController::class,'show']);

Route::get('/services', [GregmacController::class,'services']);

Route::get('/register', [GregmacController::class,'registerDeveloper']);

Route::get('/about', [GregmacController::class,'about']);

Route::get('/coursesapi', [ControllerApi::class,'getCoursesList']);