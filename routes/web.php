<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    
});

Route::get('login', function () {
    //return 'Login usuario';
    return view('auth.login');
    
});

Route::get('logout', function () {
    return 'Logout usuario';
});

Route::get('catalog', function () {
    //return 'Listado de peliculas';
    return view('catalog.index');
});

Route::get('catalog/show/{id}', function ($id) {
    //return 'Vista detalle pelicula'.$id;
    return view('catalog.show', array('id'=>$id));
});

Route::get('catalog/create', function () {
    //return 'Añadir pelicula';
    return view('catalog.create');
});

Route::get('catalog/edit/{id}', function ($id) {
    //return 'Modificar pelicula'.$id;
    return view('catalog.edit', array('id'=>$id));
});
