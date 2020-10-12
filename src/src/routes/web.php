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

// ユーザー登録
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// ログイン・ログアウト
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// ログインしていないユーザーへの権限
Route::get('/', 'ArticlesController@index')->name('articles.index');

Route::get('/', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');

// ログイン済みユーザーのみへの権限
Route::group(['middleware'=>'auth'], function() { 
   
  Route::get('/', 'ArticlesController@index')->name('articles.index');
  Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
  Route::post('/articles', 'ArticlesController@store')->name('articles.store');
  Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
  Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
  Route::put('/articles/{article}', 'ArticlesController@update')->name('articles.update');
  Route::delete('/articles/{article}', 'ArticlesController@destroy')->name('articles.destroy');

  // いいね機能
  Route::put('articles/{article}/like', 'ArticlesController@like')->name('articles.like');
  Route::delete('articles/{article}/like', 'ArticlesController@unlike')->name('articles.unlike');

  
  // マイページ表示関係
  Route::prefix('users')->name('users.')->group(function(){
    Route::get('/{user}', 'UsersController@show')->name('show');
  });

});


