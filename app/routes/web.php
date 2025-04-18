<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json([
        'nome' => 'Carlos',
        'profissao' => 'Desenvolvedor'
    ]);
});