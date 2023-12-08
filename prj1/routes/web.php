<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IngredientController;

Route::get('/', [UserController::class, 'telaLogin']);

Route::post('/in',[UserController::class, 'login']);

Route::get('/home', function () {
    return view('home');
});

// Rotas de usuários
Route::get('/users',function(){
    return view('users/register');
});
Route::get('/users/createScreen',function(){
    return view('users/create');
});
Route::get('/users/select',[UserController::class, 'index']);
Route::post('/users/create',[UserController::class, 'create']);
Route::post('/users/register',[UserController::class, 'storeRegister']);
Route::post('/users/update',[UserController::class,'update']);
Route::post('/users/delete',[UserController::class,'delete']);

// Rota de ingredientes
Route::get('/ingredients/select',[IngredientController::class, 'index']);
Route::get('/ingredients/createScreen',function(){
    return view('ingredients/create');
});
Route::post('/ingredients/create',[IngredientController::class, 'create']);
Route::post('/ingredients/update',[IngredientController::class,'update']);
Route::post('/ingredients/delete',[IngredientController::class,'delete']);

