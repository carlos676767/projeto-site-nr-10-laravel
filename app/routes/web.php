<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::post('/insertColaborador', [UserController::class, 'controllAcessDashboard']);
Route::get('/cs', function () {
    return response()->json([
        'csrf_token' => csrf_token(), 
    ]);
});