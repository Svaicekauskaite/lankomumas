<?php
use App\Club;

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

Route::get('/clubs/destroy/{id}', 'ClubController@destroy')->name('clubs.destroy');
Route::resource('clubs', 'ClubController')->except('destroy');
Route::resource('users', 'UserController');

// Route::get('/clubs', function(){
// 		return view('/clubs');
// 	})->name('clubs');






