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
*///middleware('auth:api')->

Route::post('/user', function (Request $request) {
    return $request->user();
});
//Route::post('/user','ProfilesController@index');
Route::get('/test', function () {

    return response('Test API', 200)
 
                  ->header('Content-Type', 'application/json');
 
 });
