<?php

use Illuminate\Support\Facades\Route;

$controller_route = 'App\Http\Controllers\\';

Route::view('/', 'home')->name('home');

Route::view('servicios', 'servicios')->name('servicios');

Route::view('proyectos', 'proyectos')->name('proyectos');

Route::get('clientes', $controller_route.'ClientesController@index')->name('clientes.index');

Route::get('clientes/crear', $controller_route.'ClientesController@create')->name('clientes.create');

Route::get('clientes/{id}/editar', $controller_route.'ClientesController@edit')->name('clientes.edit');

Route::patch('clientes/{id}', $controller_route.'ClientesController@update')->name('clientes.update');

Route::post('clientes', $controller_route.'ClientesController@store')->name('clientes.store');

Route::get('clientes/{id}', $controller_route.'ClientesController@show')->name('clientes.show');

Route::delete('clientes/{cliente}', $controller_route.'ClientesController@destroy')->name('clientes.destroy');

Route::view('blog', 'blog')->name('blog');

Route::view('contacto', 'contacto')->name('contacto');