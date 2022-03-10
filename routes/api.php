<?php

use App\Http\Controllers\MovieController;
use App\Http\Resources\MovieCollection;
use App\Http\Resources\MovieResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Listar peliculas
Route::get('/movie',function(){
    return new MovieCollection(Movie::all());
});

// Pelicula individual
Route::get('/movie/{id}',function($id){
    return new MovieResource(Movie::findOrFail($id));
});

// Nueva pelicula
Route::post('/movie',[MovieController::class, 'store']);

// Modificar pelicula
Route::put('/movie',[MovieController::class,'update']);

// Eliminar pelicula
Route::delete('/movie/{id}',[MovieController::class,'delete']);