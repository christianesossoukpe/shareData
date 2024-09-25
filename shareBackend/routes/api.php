<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route API pour les users
// Routes::controller(UserController::class)->group(function(){
// Route::post('/users',[UserController::class,'store']);
// });


Route::controller(UserController::class)->group(function () {
    Route::post('/users', 'store'); // Pour créer un utilisateur
    Route::get('/users', 'index'); // Pour récupérer tous les utilisateurs
    Route::get('/users/{id}', 'show'); // Pour récupérer un utilisateur spécifique
    Route::put('/users/{id}', 'update'); // Pour mettre à jour un utilisateur
    Route::delete('/users/{id}', 'destroy'); // Pour supprimer un utilisateur
});
