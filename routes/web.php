<?php

use App\User;
use Illuminate\Http\Request;
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
    return view('top');
});


//email_verified_at
Auth::routes(['verify' => true]);
//Auth::routes();

Route::get('home','HomeController@index')->middleware('verified');

Route::get('verification.verify', function(){
    return view('auth.verified');
})->middleware('verified');


/* default
Route::get('/', function () {
    return view('welcome');
});

*/

//性格診断ページ
/*
Route::get('diagnosis/index','DiagnosisController@index')->middleware('verified');
Route::get('diagnosis/create','DiagnosisController@create')->middleware('verified');
Route::post('diagnosis/store','DiagnosisController@store')->middleware('verified');
Route::get('diagnosis/show','DiagnosisController@show')->middleware('verified');
Route::get('diagnosis/{id}/edit','DiagnosisController@edit')->middleware('verified');
Route::put('diagnosis/update','DiagnosisController@update')->middleware('verified');
Route::delete('diagnosis/destroy','DiagnosisController@destroy')->middleware('verified');

*/

//まとめると
Route::resource('diagnosises','DiagnosisController')->middleware('verified');




