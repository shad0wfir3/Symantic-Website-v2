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
//        Route::get('','ServiceController@index')->name('theme.services.index');
//        Route::get('{slug}','ServiceController@single')->name('theme.services.single');


        //Current Services
        Route::get('strategic-brand-marketing','ServicesController@strategic_brand_marketing')->name('theme.services.strategic_brand_marketing');
        Route::get('graphic-design-ux-and-print','Servicescontroller@graphic_design')->name('theme.services.graphic_design');
        Route::get('website-design-development','ServicesController@website_design_development')->name('theme.services.website_development');
        Route::get('social-media-marketing','ServicesController@social_media_marketing')->name('theme.services.social_media_marketing');
        Route::get('search-engine-optimisation','ServicesController@search_engine_optimisation')->name('theme.services.search_engine_optimisation');
        Route::get('business-development','ServicesController@business_development')->name('theme.services.business_development');


        //        Route::get('saas-enterprise-development','ServicesController@saas_enterprise_development')->name('theme.services.saas_enterprise_development');


        //Package Pages (Looks Different)
        Route::get('business-development-solutions','ServicesController@sbds')->name('theme.services.sbds');
        Route::get('launch-it','ServicesController@launch_it')->name('theme.services.launch_it');

    });

    Route::prefix('blog')->group(function(){
        Route::get('','BlogController@index')->name('theme.blog.index');
        Route::get('{slug}','BlogController@getPost')->name('theme.blog.post');
        Route::get('tags/{slug}','BlogController@getTag')->name('theme.blog.tags');
        Route::get('categories/{slug}','BlogController@getCategories')->name('theme.blog.categories');
    });

    Route::prefix('our-work')->group(function(){
        Route::get('','PortfolioController@index')->name('theme.portfolio.index');
        Route::get('{slug}','PortfolioController@single')->name('theme.portfolio.post');
    });
});


Auth::routes();

Route::model('services', '\App\Services');
