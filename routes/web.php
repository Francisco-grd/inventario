<?php


Route::get('/','CartController@index');


Route::get('/productos','ProductosController@index');

Route::get('/productos/{id}','ProductosController@descripcion')
->where('id','[0-9]+');

Route::get('/productos/addproducto','ProductosController@add')
->name('Productos.addproducto');

Route::post('/productos/procesarproducto','ProductosController@create');

Route::get('/ventas','VentaController@index');

Route::get('/ventas/{id}','VentaController@detalle')
->where('id','[0-9]+');

Route::get('/carro','CartController@index');

Route::post('addcarro','CartController@busqueda')
->name('CarrodeCompra.carro');

Route::post('generarventa','VentaController@GenerarVenta')
->name('CarrodeCompra.ventas');

Route::get('/productos/updateproducto','ProductosController@update');

Route::post('/productos/updateproducto','ProductosController@busqueda');

Route::post('actualizar','ProductosController@actualizar');
