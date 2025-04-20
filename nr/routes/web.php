<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::post('/insertColaborador', [UserController::class, 'controllAcessDashboard']);
Route::post('/loginUser', [UserController::class, 'userLogin']);

Route::get('/', function () {
    return view('app');
});

Route::get('/login', function () {
    return view('login');
});
