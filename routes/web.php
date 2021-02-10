<?php

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

Auth::routes([
	'verivy' => false,
	'reset' => false
]);

Route::middleware('auth')->group(function ()
{
	
	Route::get('/', 'HomeController@index')->name('home');

	Route::post('/book/get', 'BookController@get')->name('book.get');
	Route::post('/member/get', 'MemberController@get')->name('member.get');

	Route::prefix('/author')->name('author.')->group(function ()
	{
		Route::get('/add', 'AuthorController@add')->name('add');
		Route::get('/remove', 'AuthorController@remove')->name('remove');

		Route::post('/create', 'AuthorController@create')->name('create');
		Route::delete('/destroy/{stock}', 'AuthorController@destroy')->name('destroy');
	});

	Route::resource('/book', 'BookController')->except(['show', 'edit']);
	Route::resource('/member', 'MemberController')->except(['edit']);

});