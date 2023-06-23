<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/parceiros', function () {
    return view('parceiros');
});
Route::get('/trabalhe-conosco', function () {
    return view('trabalhe-conosco');
});
Route::get('/contato', function () {
    return view('contato');
});
/*
<li><a href="/index">Home</a></li>
<li><a href="/sobre">Sobre Nós</a></li>
<li><a href="/portfolio">Portfólio</a></li>
<li><a href="/parceiros">Parceiros</a></li>
<li><a href="/trabalhe-conosco">Trabalhe Conosco</a></li>
<li><a href="/contato">Contato</a></li>
*/