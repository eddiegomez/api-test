<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\API\TesteController;
=======
use App\Http\Controllers\API\TestesController;
>>>>>>> master

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

<<<<<<< HEAD
Route::get('test', function() {
    dd (DB::connection()->getPdo());
});

Route::resource('testes', TesteController::class);
=======
Route::resource('testes', TestesController::class);
>>>>>>> master
