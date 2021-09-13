<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/google198c15353f62bb77.html', function () {
    return view('google198c15353f62bb77');
});

Route::get('/newsitemap.xml', function () {
    
    $xmlString = file_get_contents(public_path('newsitemap.xml'));
    $xmlObject = simplexml_load_string($xmlString);
               
    $json = json_encode($xmlObject);
    $phpArray = json_decode($json, true); 

    dd($phpArray);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
