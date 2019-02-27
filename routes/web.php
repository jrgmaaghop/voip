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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();
//
Route::get('/home', 'DirectoryController@index')->name('home');
Auth::routes();

Route::get('/', 'DirectoryController@index')->name('home');

Route::get('/dashboard', 'DirectoryController@index')->name('dashboard');

Route::get('/changepassword/{id}', 'ChangePasswordController@edit')->name('changepassword');
Route::post('/changepassword', 'ChangePasswordController@update')->name('passwordupdate');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    // Route::resource('products','ProductController');
});

Route::resource('directory', 'DirectoryController');
Route::get('/directory/create/','DirectoryController@create')->name('create');
Route::get('/directory/edit/{id}','DirectoryController@edit')->name('edit');
Route::post('/directory/store/','DirectoryController@store')->name('store');

// Route::resource('teams', 'TeamController');
// Route::resource('candidates', 'CandidatesController');
// Route::resource('criteria', 'CriteriaController');
// Route::resource('rounds', 'RoundController');
//
// Route::get('/contest', 'ContestController@index')->name('contest-index');
// Route::get('/contest/addroundcandidate/{id}', 'ContestController@addRoundCandidate')->name('contest-addRoundCandidate');
// Route::post('/contest/storeroundcandidate', 'ContestController@storeRoundCandidate')->name('contest-storeRoundCandidate');
// Route::post('/contest/removeroundcandidate', 'ContestController@removeRoundCandidate')->name('contest-removeRoundCandidate');
//
//
// Route::get('/judging', 'JudgingController@index')->name('judging-index');
// Route::get('/judging/setscore/{id}/round/{r}/u/{u}', 'JudgingController@setScore')->name('judging-setscore');
// Route::post('/judging/savescore', 'JudgingController@saveScore')->name('judging-savescore');
//
// Route::get('/results', 'ResultsController@index')->name('results-index');
// Route::get('/results/criteria/{id}/round/{r}/u/{u}', 'ResultsController@resultScore')->name('results-score');
