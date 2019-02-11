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

Route::get('categoryList','CategoryController@getCategory');
Route::post('saveCategory','CategoryController@saveCategory');
Route::get('getQuestions','CategoryController@getQuestionByCategoryId');
Route::group(['middleware' => ['json.response']], function () {

	Route::post('login', 'PassportController@login');
	Route::post('register', 'PassportController@register');
	Route::middleware('auth:api')->group(function () {
	    Route::get('user', 'PassportController@details');
	 	Route::get('logout', 'PassportController@logout')->name('logout');
	});
});
