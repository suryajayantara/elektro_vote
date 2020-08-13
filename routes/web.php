<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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
        return redirect()->route('login');
});


// Default Routes
Auth::routes();


Route::get('/home', function(){
    return view('welcome');
})->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.dash');
    Route::get('/addvote', 'AdminController@formUser')->name('admin.addVote');
    Route::get('/showvote', 'AdminController@searchUser')->name('admin.search');
    Route::post('/showvote', 'AdminController@indexUser')->name('admin.showuser');
    Route::post('/store', 'AdminController@storeUser')->name('admin.store');
});

// User
Route::group(['prefix' => 'users'], function () {
    Route::get('/','StudentController@index')->name('user.dashboard');
    Route::get('rules','StudentController@viewRules')->name('user.rules');
    Route::get('vote','StudentController@viewVote')->name('user.vote');
});