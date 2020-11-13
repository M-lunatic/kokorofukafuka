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

Route::get('/home','HomeController@index')->middleware('verified');
Route::get('/mypage','HomeController@mypage')->name('mypage');


//Route::edit('mypage/{id}/edit','LoginController@edit')->middleware('auth');

/*
Route::edit('mypage/{id}/edit','LoginController@edit')->middleware('auth');
Route::put('mypage/update','LoginController@Update')->middleware('auth');
Route::delete('mypage/user_delete','RegisterController@destroy')->middleware('auth');
*/

Route::get('verification.verify', function(){
    return view('auth.verified');
})->middleware('verified');


//性格診断ページ
/*
Route::get('Diagnoses/index','DiagnosesController@index')->middleware('verified');
Route::get('Diagnoses/create','DiagnosesController@create')->middleware('verified');
Route::post('Diagnoses/store','DiagnosesController@store')->middleware('verified');
Route::get('Diagnoses/show','DiagnosesController@show')->middleware('verified');
Route::get('Diagnoses/{id}/edit','DiagnosesController@edit')->middleware('verified');
Route::put('Diagnoses/update','DiagnosesController@update')->middleware('verified');
Route::delete('Diagnoses/destroy','DiagnosesController@destroy')->middleware('verified');

*/

//まとめると
Route::resource('diagnosis','DiagnosesController')->middleware('verified');




