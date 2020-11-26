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
    $user = Auth::user();
    return view('top',compact('user'));
});



//email_verified_at
Auth::routes(['verify' => true]);


Route::get('verification.verify', function(){
    return view('auth.verified');
})->middleware('verified');

Route::get('mypage','HomeController@mypage')->middleware('verified');
Route::get('home/{id}/show','HomeController@show')->middleware('verified');
Route::get('home/{id}/edit','HomeController@edit')->middleware('verified');
Route::put('home/update','HomeController@update')->middleware('verified');
Route::get('home/question', 'HomeController@question')->middleware('verified');
Route::delete('home/destroy','HomeController@destroy')->middleware('verified');

//性格診断ページ
/*
Route::get('Diagnoses/index','DiagnosesController@index')->middleware('verified');
Route::get('Diagnoses/create','DiagnosesController@create')->middleware('verified');
Route::post('Diagnoses/store','DiagnosesController@store')->middleware('verified');
Route::get('Diagnoses/{id}/show','DiagnosesController@show')->middleware('verified');
Route::get('Diagnoses/{id}/edit','DiagnosesController@edit')->middleware('verified');
Route::put('Diagnoses/update','DiagnosesController@update')->middleware('verified');
Route::delete('Diagnoses/destroy','DiagnosesController@destroy')->middleware('verified');

*/

//まとめると
Route::resource('diagnoses','DiagnosesController')->middleware('verified');

//ヘルパー関数のチェック
Route::get('/path', function () {
    return view('path.index');
});


