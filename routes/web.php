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

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('/home', function () {
        return view('admin.dashboard');
    });
     // Theme Routes
    Route::get('themes/destroy/{id}', 'ThemesController@destroy');
    Route::get('themes/duplicate/{id}', 'ThemesController@duplicate');
    Route::post('themes/search/', 'ThemesController@search');
    Route::post('themes/create/', 'ThemesController@store');
    //Route::post('themes/update/{id}', 'ThemesController@update');
    Route::resource('themes','ThemesController');

    // Modules
    Route::get('modules/{id}', 'ModulesController@index');
    Route::get('modules/create/{id}', 'ModulesController@create');
    Route::get('module/destroy/{id}', 'ModulesController@destroy');
    Route::put('modules/update/{id}', 'ModulesController@update')->name('modules.update');

    Route::get('modules/edit/{id}', 'ModulesController@edit')->name('modules.edit');
    Route::post('modules/store','ModulesController@store');
    // Route::resource('/modules','ModulesController');

    // Sites
    Route::get('site/destroy/{id}', 'SitesController@destroy');
    Route::post('sites/create','SitesController@store');
    Route::resource('sites','SitesController');
    Route::get('site/gettheme/{id}', 'SitesController@gettheme');

    // Sites Pages Routes
   Route::get('pages/index/{id}', 'PagesController@index');
   Route::get('pages/create/{id}', 'PagesController@create');
   Route::post('pages/create/', 'PagesController@store');
   Route::get('pages/destroy/{id}', 'PagesController@destroy');
   Route::resource('pages','PagesController');



   // User RouteServiceProvider
   Route::resource('users','UsersController');
   Route::get('widget/addgroup', 'WidgetController@addgroup');
   Route::any('edit-page', 'PagesController@edit_page')->name('edit-page');

});

Route::any('testing','PagesController@test')->name('testing');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
