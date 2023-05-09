<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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

Route::get('/', function () { return view('welcome'); });
Route::group(['middleware'=> 'auth'], function() {
  Route::get('/add_cars', [CarsController::class, 'create']);
});
Auth::routes();
Route::get('/cars_list', [CarsController::class, 'index']);
Route::post('/add_cars', [CarsController::class, 'store']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
