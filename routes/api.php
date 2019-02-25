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

//For CategoryController
Route::get('categories','CategoryController@getCategoriesList');
Route::post('category','CategoryController@saveCategory');
Route::post('category/questions/{idCategory}','CategoryController@getQuestionByCategoryId');
//For QuestionController
Route::get('questions','QuestionsController@getQuestionList');
Route::get('exam/events','ExamController@getActiveEventList');
// Event Controller
Route::get('events/result','ExamController@getActiveEventList');

Route::group(['middleware' => ['json.response']], function () {

	Route::post('login', 'PassportController@login');
	Route::post('register', 'PassportController@register');
	Route::middleware('auth:api')->group(function () {
	    Route::get('user', 'PassportController@details');
	 	Route::get('logout', 'PassportController@logout')->name('logout');
	});
});
