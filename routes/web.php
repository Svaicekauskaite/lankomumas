<?php
use App\User;
use App\Club;
use App\Student;

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

Route::post('/login', [
	'uses'=>'LoginController@login',
	'as'=>'login'
]);


Route::get('/club', 'ClubController@index')->name('club');

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('lessons', 'LessonController');
Route::get('club/{id}', 'LessonController@index')->name('lesson');
Route::post('/lessons/store', 'LessonController@store')->name('lessons.store');
Route::post('/lessons/prideti', 'StudentController@prideti')->name('prideti');
Route::post('/lessons/pasalinti', 'StudentController@pasalinti')->name('pasalinti');

Route::get('/lessons/{id}/{ids}', 'LessonController@attendance')->name('attendance');

Route::get('newStudent', 'StudentController@create')->name('create');
Route::post('/lessons/create', 'StudentController@store')->name('sukurti');

Route::post('/dalyvavo/{id}', 'LessonController@dalyvavo')->name('dalyvavo');


