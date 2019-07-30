<?php

use Psr\Http\Message\ServerRequestInterface;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('components.home',[
    		"title"=>"Home"
    ]);
});

Route::get('/add', function () {
   return view('components.add',[
   		"title"=>"Agregar Productos"
   ]);
});

Route::post('/products', 'productsController@create');
Route::get('/products','productsController@show');
Route::get('/billing','productsController@billing');
Route::post('/billing','productsController@returnProducts');
Route::post('/mkpdf','pdfController@create');

