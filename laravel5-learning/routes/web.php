<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//For the ProfMedicine

Route::get('/', 'HomeController@index');
Route::get('auth/registration', ['uses' => 'AuthController@create']);
Route::post('auth/resreg', ['uses' => 'AuthController@store']);
Route::get('login/signinPatient', 'LoginPatientController@create');
Route::post('login/room', ['uses' => 'LoginPatientController@store']);
Route::get('login/signinDoctor', 'LoginDoctorController@create');
Route::post('login/room1', ['uses' => 'LoginDoctorController@store']);
Route::post('login/entry', ['uses' => 'EntryPatientController@create']);
Route::post('login/result', ['uses' => 'EntryPatientController@store']);
Route::post('login/comment', ['uses' => 'CommentPatientController@create']);
Route::post('login/submitcomment', ['uses' => 'CommentPatientController@store']);
Route::post('login/doctorState', ['uses' => 'DoctorStateController@create']);
Route::get('login/signinAdmin', 'LoginAdminController@create');
Route::post('login/roomAdmin', ['uses' => 'LoginAdminController@store']);
Route::post('login/roomAdmins', ['uses' => 'LoginAdminController@storeDoctor']);
Route::post('login/delComment', ['uses' => 'LoginAdminController@delete']);
Route::post('login/blockingPatient', ['uses' => 'LoginAdminController@blockingPatient']);
Route::post('login/publishNews', ['uses' => 'LoginAdminController@publishHomeNews']);
Route::get('login/mentions', 'MentionController@create');
Route::post('login/DelNews', ['uses' => 'LoginAdminController@DelHomeNews']);
Route::get('services', 'ServicesController@create');
Route::get('about', 'AboutController@create');
Route::get('chat/index', 'ChatController@index');
//Route::post('login/message', ['uses' => 'ChatController@postMessage']);
Route::post('login/delEntry', ['uses' => 'LoginPatientController@delete']);

//For the ProfMedicine