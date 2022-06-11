<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

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

Route::get('/',[pageController::class,'home'])->name('Home');

Route::get('/create',[pageController::class,'create'])->name('Create');

Route::post('/create',[pageController::class,'createSubmit'])->name('CreateSubmit');

Route::get('/login',[pageController::class,'login'])->name('Login');

Route::post('/login',[pageController::class,'loginSubmit'])->name('LoginSubmit');