<?php
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('bienvenido');
})->name('ruta_inicio');

Route::get('/productos', function () {
    return view('productos');
})->name('ruta_productos');

Route::get('/servicios', function () {
    return view('servicios');
})->name('ruta_servicios');

Route::get('/contacto', function () {
    return view('contacto');
})->name('ruta_contacto');