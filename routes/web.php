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

Route::get('/', [
    'as' => 'home' ,
    'uses' => 'PageController@getHome'
]);
Route::get('/about-us',[
   'as' => 'about-us',
   'uses' => 'PageController@getAboutUs'
]);
Route::get('/contact',[
   'as' => 'contact' ,
   'uses' => 'PageController@getContact'
]);
Route::get('/chi-tiet-san-pham',[
   'as' => 'product-details',
   'uses' => 'PageController@getProductDetails'
]);
