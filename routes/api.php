<?php

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/usuarios', function () {
    return Usuario::all();
});

Route::post('/usuarios', function (Request $request) {
    $usuario = new Usuario();
    $usuario->nome = $request->nome;
    $usuario->email = $request->email;
    $usuario->save();
    return response()->json($usuario, 201);
});
