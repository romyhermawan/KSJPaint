<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=> ['web']],function(){
    //Front-End
    Route::get('/test', function(){
	        return view('errors.503');
	});
    Route::get('/', function () {
		return view('Home');
	});

	Route::get('/product', function () {
	    return view('FrontEnd.product');
	});

	Route::get('/gallery', function () {
	    return view('FrontEnd.gallery');
	});

	Route::get('/tutorial', function () {
	    return view('FrontEnd.tutorial');
	});

	Route::get('/faq', function () {
	    return view('FrontEnd.faq');
	});

	Route::get('/loginadmin', function () {
	    return view('loginadmin');
	});


	Route::post('/loginadmin','admincontroller@login');
	Route::get('/logoutadmin','admincontroller@logout');

	Route::get('/testpdf',function(){
		$my_var = "test";
		$pdf = App::make('dompdf.wrapper');
		$pdf->loadHTML($my_var);
		return $pdf->stream();
	});
    //group
    Route::group(['middleware'=>'auth'],function(){
    	Route::get('/adminpanel', function () {
		    return view('Master.MasterBack');
		});
    	Route::get('/changepass', function () {
		    return view('BackEnd.changepass');
		});
		Route::post('/changepass','admincontroller@change');

		Route::get('/master/slider','mastercontroller@indexslider');
		Route::post('/master/slider','mastercontroller@editslider');

		Route::get('/master/logo','mastercontroller@indexlogo');
        Route::post('/master/logo','mastercontroller@editlogo');
    });
    
});


