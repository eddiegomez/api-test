<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
<<<<<<< HEAD
use App\Http\Controllers\API\TesteController;
=======
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\TestesController;
>>>>>>> master
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::post('logout', [RegisterController::class, 'logout']);
     
Route::middleware('auth:api')->group( function () {
<<<<<<< HEAD
  Route::resource('products', ProductController::class);
	Route::resource('testes', TesteController::class);
  //Route::get('testes', 'app\Http\API\Controllers\TesteController@index');
=======
    //usado para testes (conexao via mysql)
    Route::resource('products', ProductController::class);
    Route::resource('testes', TestesController::class);
>>>>>>> master
});

Route::get('/user', function (Request $request) {
  return auth()->guard('api')->user();
});