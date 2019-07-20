<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pegawai','PegawaiController@index');
Route::get('/pegawai/{id}','PegawaiController@detail');
Route::post('pegawai','PegawaiController@create');
Route::put('/pegawai/{id}','PegawaiController@update');
Route::delete('/pegawai/{id}','PegawaiController@delete');
