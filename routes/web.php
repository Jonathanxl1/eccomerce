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
// Route::post('/rpdf','pdfController@index');


Route::get('/pdf',function(){
// $pdf = App::make('dompdf.wrapper');
// $pdf->loadHTML('<h1 style="text-align:center">Soy una Factura</h1>');
// return $pdf->stream();
// $pdf->loadView('components.factura',[
	// "data" => ""
// ]);
// return $pdf->stream();


});

// Route::post('/billing',function (Request $request){
	
// });
// Route::post('/response',function (Request $request){
	
// if($request->isJson())
// {
// 	return $request->all();
// }
 
//  });
