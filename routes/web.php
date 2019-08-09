<?php

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

    return view('landing');
});

Route::get('/demo1', function () {
    return view('demo1');
});


Route::get('/como-trabajamos', function () {
    return view('como_trabajamos');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});


Route::get('/como-iniciar', function () {
    return view('como_iniciar');
});

Auth::routes();

Route::post('/step1', 'StepController@step1');
Route::post('/step3', 'StepController@step3');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'SectionController@inicio');

Route::group(['middleware' => ['web']], function () {

    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);

});

Route::group(['prefix' => 'admin'], function (){
    Route::resource('section', 'Admin\ASectionController');
});
