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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/users/{user}', 'AdminController@getUsers')->name('show_user');


    Route::get('/topics', 'TopicController@index')->name('topics');
    Route::get('/topics/create', 'TopicController@create')->name('topics.create');
    Route::post('/topics/create', 'TopicController@store')->name('topics.store');
    Route::post('/topics/{id}/edit', 'TopicController@edit')->name('topics.edit');
    Route::get('/topics/{id}/edit', 'TopicController@update')->name('topics.update');
    Route::get('/topics/{id}/destroy', 'TopicController@destroy')->name('topics.destroy');



    Route::get('chapters/{id}/questions', 'QuestionController@index')->name('questions');
    Route::get('chapters/{id}/question/create', 'QuestionController@create')->name('questions.create');
    Route::post('chapters/question/create', 'QuestionController@store')->name('questions.store');
    Route::post('chapters/{id}/question/edit', 'QuestionController@edit')->name('questions.edit');
    Route::get('chapters/{id}/question/edit', 'QuestionController@update')->name('questions.update');
    Route::get('chapters/{id}/question/destroy', 'QuestionController@destroy')->name('questions.destroy');




    Route::get('/topics/{id}/chapters', 'SubTopicsController@index')->name('chapters');
    Route::get('/chapters/{id}/create', 'SubTopicsController@create')->name('chapters.create');
    Route::post('/chapters/create', 'SubTopicsController@store')->name('chapters.store');
    Route::post('/chapters/{id}/edit', 'SubTopicsController@edit')->name('chapters.edit');
    Route::get('/chapters/{id}/edit', 'SubTopicsController@update')->name('chapters.update');
    Route::get('/chapters/{id}/destroy', 'SubTopicsController@destroy')->name('chapters.destroy');



});
