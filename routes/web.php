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

Route::post('login','userloginController@login');
Route::get('index','userloginController@index');
Route::get('logout','userloginController@logout');
Route::get('shopbills/{shopid}','shopController@shopbills');
Route::get('profile','profileController@profile');
Route::get('addshops','shopController@addShops');
Route::get('listshops','shopController@listshops');
Route::get('addbills','billsController@indexbills');
Route::get('viewbill/{billid}','billsController@billprint');
Route::post('shopin','profileController@shopin');
Route::post('ownerin','shopController@ownerin');
Route::post('billgenerate','billsController@billgenerate');
Route::get('listbills','billsController@listbills');
Route::get('deletebill/{deleteit}','billsController@deletebill');
Route::get('deleteshop/{deletid}','shopController@deleteshop');
Route::get('viewshop/{shopid}','shopController@editshop');
Route::post('editowner','shopController@editowner');
