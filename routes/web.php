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
Route::get('/','ClientController@index');
Route::get('/aboutus','ClientController@about');
Route::get('/service','ClientController@service');
Route::get('/portfolio','ClientController@portfolio');
Route::get('/contactus','ClientController@contact');
Route::post('/contact','ClientController@contact_form');
Route::get('/yoc','ClientController@portfolio_detail');
Route::get('/sehgalmotors','ClientController@sehgalmotors');
Route::get('/hmt','ClientController@hmt');
Route::get('/mochicc','ClientController@mochicc');
Route::get('/blog','ClientController@blog');
//Clear configurations:
			Route::get('/configs/clear', function() {
				$status = Artisan::call('config:clear');
				return '<h1>Configurations cleared</h1>';
			});

//Clear cache:
			Route::get('/caches/clear', function() {
				$status = Artisan::call('cache:clear');
				return '<h1>Cache cleared</h1>';
			});
