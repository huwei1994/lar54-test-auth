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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('front/register/form',['as' => 'front.register.form','uses'=> 'Front\FrontRegisterController@showRegistrationForm']);
Route::post('front/register',['as'=> 'front.register','uses'=>'Front\FrontRegisterController@register']);
Route::get('front/login/form',['as'=>'front.login.form','uses','uses'=>'Front\FrontLoginController@showLoginForm']);
Route::post('front/login',['as'=>'front.login','uses'=>'Front\FrontLoginController@login']);
Route::get('admin', 'Front\FrontIndex@admin');

Route::get('test/slot', 'TestOther\TestOtherController@index');
Route::get('test/slot_title', 'TestOther\TestOtherController@slot_title');
