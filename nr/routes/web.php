<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::post('/insertColaborador', [UserController::class, 'controllAcessDashboard']);
Route::post('/loginUser', [UserController::class, 'userLogin']);
Route::post('/getUserTk', [UserController::class, 'roleUser']);

//rotas telas render
Route::get('/', function () {
    return view('app');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/404Page', function () {
    return view('404Page');
});
