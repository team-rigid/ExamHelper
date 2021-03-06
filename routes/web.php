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
    return view('login');
});

Route::get('login', function () {
    return view('login');
});

Route::resource('users', 'UserController');
Route::resource('questions', 'QuestionsController');
Route::resource('events', 'EventsController');
Route::post('login', 'PassportController@login');
Route::post('filter', 'QuestionsController@filter');



// Route::get('questionsCreate', function () {
//     return view('questions/create');
// });
// Route::post('questionsList', function () {
//     return view('questions/index');
// });

// Route::get('questions', 'QuestionsController@create')->name('questions.create');
// Route::post('questions', 'QuestionsController@store')->name('questions.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
