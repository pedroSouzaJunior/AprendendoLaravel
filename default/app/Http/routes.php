<?php

Route::get('/', function() {    
    return "<h1>Primeira Lógica em Laravel?<h1>";
});


Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::match(array('GET', 'POST'), '/produtos/adiciona', 'ProdutoController@adiciona');