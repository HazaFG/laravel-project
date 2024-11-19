<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//suma
Route::get('/sumar/{n1}/{n2}', function ($n1, $n2) {
    return "La suma de $n1 y $n2 es: " . ($n1 + $n2);
});

//resta
Route::get('/restar/{n1}/{n2}', function ($n1, $n2) {
    return "La resta de $n1 y $n2 es: " . ($n1 - $n2);
});

//multiplicacion
Route::get('/multiplicar/{n1}/{n2}', function ($n1, $n2) {
    return "La multiplicación de $n1 y $n2 es: " . ($n1 * $n2);
});

//divison
Route::get('/dividir/{n1}/{n2}', function ($n1, $n2) {
    if ($n2 == 0) {
        return "No se puede dividir entre cero.";
    }
    return "La división de $n1 entre $n2 es: " . ($n1 / $n2);
});

//saludar con apellido opcional
Route::get('/saludar/{nombre}/{apellido?}', function ($nombre, $apellido = 'Doe') {
    return "¡Hola, $nombre $apellido!";
});
