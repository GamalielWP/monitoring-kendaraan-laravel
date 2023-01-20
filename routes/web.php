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

Auth::routes();

Route::get('/', 'LandingController@index');

Route::get('/get-status-pesanan', 'AdminController@getPesanan');

Route::get('/admin-dashboard', 'AdminController@index');
Route::post('/admin-dashboard/pesan', 'AdminController@buatPesanan');

Route::get('/katambang-dashboard', 'KatambangController@index');
Route::patch('/katambang-dashboard/update-{id}', 'KatambangController@updatePesanan');

Route::get('/kapool-dashboard', 'KapoolController@index');
Route::patch('/kapool-dashboard/update-{id}', 'KapoolController@updatePesanan');
