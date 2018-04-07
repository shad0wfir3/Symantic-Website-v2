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

Route::get('/','PagesController@index')->name('home');
Route::get('about-us','PagesController@about')->name('about');

Route::prefix('services')->group(function(){
    Route::get('branding','PagesController@branding')->name('branding');
    Route::get('design','PagesController@design')->name('design');
    Route::get('e-commerce','PagesController@e_commerce')->name('e-commerce');
    Route::get('website-development','PagesController@development')->name('development');
    Route::get('operations-solutions','PagesController@operations')->name('operations');
    Route::get('strategic-marketing','PagesController@strategic')->name('strategic');
});

Route::get('contact-us','PagesController@contact_us')->name('contact_us');

Route::get('quote-me','PagesController@quote')->name('quote-me');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::prefix('blog')->group(function(){
        Route::get('','BlogController@index')->name('admin.blog');
        Route::get('create','BlogController@create')->name('admin.blog.create');
    });
});
