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
Route::get('/the-loai/{id_category}',[
   'as' => 'category-games' ,
   'uses' => 'PageController@getCategoryGame'
]);
// Dang nhap
Route::post('login',[
    'as' => 'login' ,
    'uses' => 'LoginController@postLogin'
]);
// Dang ky
Route::post('register',[
    'as' => 'register' ,
    'uses' => 'LoginController@postRegister'
]);
