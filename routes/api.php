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
//For users
Route::get('userRole','UserTypeController@getUserRole');
//For CategoryController
Route::get('categories','CategoryController@getCategoriesList');
Route::post('category','CategoryController@saveCategory');
Route::post('category/questions/{idCategory}','CategoryController@getQuestionByCategoryId');
//History
Route::post('history/practices','HistoryController@getHistoryList');
Route::post('history/practices/store','HistoryController@saveHistory');
//For QuestionController
Route::get('questions','QuestionsController@getQuestionList');
Route::get('exam/events','ExamController@getActiveEventList');

// Event Controller
Route::post('events/results','EventsController@saveEventResults');
Route::post('events/eventStatus','EventsController@saveEventStatus');
Route::get('eventsList','EventsController@getEvents');
Route::post('event/eventHistory','EventsController@getEventHistoryByEventId');


Route::group(['middleware' => ['json.response']], function () {

	Route::post('login', 'PassportController@login');
	Route::post('register', 'PassportController@register');
	Route::middleware('auth:api')->group(function () {
	    Route::get('user', 'PassportController@details');
	 	Route::get('logout', 'PassportController@logout')->name('logout');
	});
});
