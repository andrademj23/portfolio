<?php

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
    return view('welcome');
});

Route::get('/about', function(){
    //return ('this is about page');
    return view('about');
});
Route::get('/product', function(){
    //return ('this is product page');
return view('product', ['name' => 'Shoes']);
});

Route::get('/portfolio', function(){
    return view('portfolio');
});

Route::get('name/{name}', function($name){
    return ('My name is '. $name);
});

Route::get('/user/{name?}', function ($name = 'Guest') {
    return 'User ' . $name;
});
