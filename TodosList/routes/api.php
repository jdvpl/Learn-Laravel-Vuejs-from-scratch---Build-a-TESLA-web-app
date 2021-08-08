<?php
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// devuelve lo que hay en la base de datos index es la funcion que esta en el TodoController
Route::get('todos', [TodoController::class,'index']);
// para crear datos funcion store en TodoController
Route::post('todo/store', [TodoController::class, 'store']);
// actuializar
Route::post('todo/update/{id}', [TodoController::class, 'update']);
// eliminar
Route::get('todo/delete/{id}', [TodoController::class, 'destroy']);
