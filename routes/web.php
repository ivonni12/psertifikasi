<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[MahasiswaController::class,'index']);
Route::get('/create',[MahasiswaController::class,'create']);
Route::post('/store',[MahasiswaController::class,'store']); //post untuk memasukan data & mengupdate
Route::get('/show/{id}',[MahasiswaController::class,'show']); //id diambil datanya untuk sumber idnya
Route::post('/update/{id}',[MahasiswaController::class,'update']);
Route::get('/destroy/{id}',[MahasiswaController::class,'destroy']);