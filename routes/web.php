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

//Link
Route::get('/', 'DashboardController@index');
Route::get('/orders', 'OrdersController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/customers', 'CustomersController@index');
Route::get('/reports', 'ReportsController@index');
Route::get('/integrations', 'IntegrationsController@index');

//Get and Post
