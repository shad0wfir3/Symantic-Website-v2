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
Route::namespace('Theme')->group(function(){

    //Static Pages
    Route::get('/','PagesController@index')->name('theme.pages.index');
    Route::get('about-us','PagesController@about')->name('theme.pages.about_us');
    Route::get('contact-us','PagesController@contact_us')->name('theme.pages.contact_us');
    Route::get('terms-and-conditions','PagesController@terms_conditions')->name('theme.pages.terms_conditions');
    Route::get('privacy-policy','PagesController@privacy_policy')->name('theme.pages.privacy_policy');
    Route::get('career-opportunities','PagesController@career_listings')->name('theme.pages.careers');
    Route::get('request-a-quote','PagesController@request_quote')->name('theme.pages.request_quote');

    //Pages from DB
    Route::prefix('services')->group(function(){
        Route::get('','ServiceController@index')->name('theme.services.index');
        Route::get('{slug}','ServiceController@single')->name('theme.services.single');
        Route::get('business-development-solutions','ServiceController@sbds')->name('theme.services.sbds');
        Route::get('launch-it','ServiceController@launch_it')->name('theme.services.launch_it');

    });

    Route::prefix('blog')->group(function(){
        Route::get('','BlogController@index')->name('theme.blog.index');
        Route::get('{slug}','BlogController@single')->name('theme.blog.post');
        Route::get('tags/{slug}','BlogController@getTag')->name('theme.blog.tags');
        Route::get('categories/{slug}','BlogController@getCategories')->name('theme.blog.categories');
    });

    Route::prefix('our-work')->group(function(){
        Route::get('','PortfolioController@index')->name('theme.portfolio.index');
        Route::get('{slug}','PortfolioController@single')->name('theme.portfolio.post');
    });
});


Auth::routes();


Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function(){
    Route::get('', 'DashboardController@index')->name('home');
    Route::resource('blog','BlogController');
//    Route::prefix('blog')->group(function(){
////        Route::get('','BlogController@index')->name('admin.blog.index');
////        Route::get('create','BlogController@create')->name('admin.blog.create');
////    });
    Route::resource('services',"ServiceController");
    Route::post('services/{service}/edit/change_status','ServiceController@status_change')->name('service.status');
//    Route::post('upload_image','HomeController@uploadImg')->name('cloudinary.upload');
});

Route::model('services', '\App\Services');
