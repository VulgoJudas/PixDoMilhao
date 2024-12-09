<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GanhadoresController;
use App\Http\Controllers\EdicaoAnteriores;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/ganhadores',[GanhadoresController::class,'index']
);

Route::get('/quem-somos', function () {
    return view('quemsomos');
});

Route::get('/fale-conosco', function () {
    return view('faleconosco');
});

Route::get('/edicao-anteriores', [EdicaoAnteriores::class,'index']);

Route::get('/meus-numeros', function () {
    return view('meusnumeros');
});

Route::get('/sorteio-venda', function () {
    return view('sorteio_venda');
});

