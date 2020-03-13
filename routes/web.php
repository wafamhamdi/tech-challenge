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
Route::resource('challenges', 'ChallengeController'); 
Route::resource('users', 'UserController'); 
Route::resource('organizers', 'OrganizerController'); 

Route::resource('dashboard', 'ChallengeDashboardController'); 
Route::resource('comments', 'ChallengeCommentController'); 
Route::get('commentByChallenge/{idChallenge}', 'ChallengeCommentController@getAllChallengecomment')->name('commments'); 
Route::resource('codes', 'ChallengeCodeController'); 
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('home.home');
});