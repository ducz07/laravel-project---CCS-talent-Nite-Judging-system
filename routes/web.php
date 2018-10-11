<?php
use App\CandidateInfo;
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

Route::get('/home', 'HomeController@index');

Route::get('/participants', 'HomeController@participants');

Route::get('/addparticipants', 'HomeController@add');

Route::post('/insert', 'HomeController@insert')->name('insert');

Route::get('/editparticipants/{id}', 'HomeController@edit')->name('editparticipants');

Route::get('/delete/{id}', 'HomeController@delete')->name('delete');

Route::post('update/{id}', 'HomeController@update')->name('update');

Route::get('/addjudge', 'JudgesController@addjudge');

Route::post('/insertjudge', 'JudgesController@insertjudge')->name('insertjudge');

Route::get('/editjudge/{id}', 'JudgesController@editjudge')->name('editjudge');

Route::post('updatejudge/{id}', 'JudgesController@updatejudge')->name('updatejudge');

Route::get('/deletejudge/{id}', 'JudgesController@deletejudge')->name('deletejudge');

Route::post('/addjudge','JudgesController@imageUpload');


Route::get('/result', 'ResultsController@result');

Route::get('/judge', 'JudgesController@judge');

Route::get('/tabulate', 'TabulatorsController@tabulate');

Route::get('/tabulate', 'TabulatorsController@tabulate');


Route::get('/user', 'TestsController@user');
Route::get('/user', function(){
	return view('/user');
});
Route::get('/editparticipants', 'EditParticipantsController@editparticipants');
Route::get('/editparticipants', function(){
	return view('/editparticipants');
});
