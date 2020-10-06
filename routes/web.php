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

route::get('/test',function(){
    return view('pages.menucontest');
});

Route::get('/home', function(){
    return view('welcome');
})->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.dash');
    Route::get('/addvote', 'AdminController@formUser')->name('admin.addVote');
    Route::get('/search', 'AdminController@searchUser')->name('admin.search');
    Route::post('/index/kelas/', 'AdminController@indexUser')->name('admin.showuser');
    Route::post('/store', 'AdminController@storeUser')->name('admin.store');
    Route::get('/destroy/{id}','AdminController@destroyUser')->name('admin.destroy');
    Route::get('/show/{id}','AdminController@showUser')->name('admin.destroy');
    Route::post('/edit/{id}','AdminController@editUser')->name('admin.edit');
});

// User
Route::group(['prefix' => 'users'], function () {
    Route::get('/','StudentController@index')->name('user.dashboard');
    Route::get('rules','StudentController@viewRules')->name('user.rules');
    Route::get('vote','StudentController@viewVote')->name('user.vote');
    Route::get('contestant','StudentController@viewContestant')->name('user.contestant');
    Route::group(['prefix' => 'contestant'], function () {
        route::get('/1','ContestantController@contestant_one')->name('contestant.one');
        route::get('/2','ContestantController@contestant_two')->name('contestant.two');
    });
    Route::get('/rules','ContestantController@rules')->name('user.rules');
});