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

// Route::middleware('auth:api')->get('/links', function (Request $request) {
//     //return $request->user();
//     return response (['link1','link2'],200);
// });

Route::middleware('auth:api')->get('/categories', 'CategoryController@index');
Route::middleware('auth:api')->post('/addcategory','CategoryController@create');
Route::middleware('auth:api')->post('/addlink','LinkController@create');
Route::middleware('auth:api')->post('/removelink','LinkController@destroy');


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    //Route::get('categories', 'CategoryController@index');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

// Route::post('links', function (){
//     return response ('link1','link2',200);
// });
