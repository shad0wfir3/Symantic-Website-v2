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

Route::get('/','PagesController@index')->name('index');
Route::get('about-us','PagesController@about')->name('about');

Route::prefix('services')->group(function(){
    Route::get('{slug}','ServiceController@getPage')->name('service.page');
});

Route::get('contact-us','PagesController@contact_us')->name('contact_us');

Route::get('quote-me','PagesController@quote')->name('quote_me');


Auth::routes();


Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function(){
    Route::get('', 'HomeController@index')->name('home');
    Route::prefix('blog')->group(function(){
        Route::get('','BlogController@index')->name('admin.blog.index');
        Route::get('create','BlogController@create')->name('admin.blog.create');
    });

        Route::resource('services',"ServiceController");



    Route::post('services/{service}/edit/change_status','ServiceController@status_change')->name('service.status');
//    Route::post('upload_image','HomeController@uploadImg')->name('cloudinary.upload');
});
