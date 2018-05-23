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

Route::get('/', ['as' => 'main', 'uses' => 'ServersController@main']);

// Pages
Route::get('/logout', ['as' => 'logout', 'uses' => 'PagesController@logout']);
Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('/rules', ['as' => 'rules', 'uses' => 'PagesController@rules']);
Route::get('/contacts', ['as' => 'contacts', 'uses' => 'PagesController@contacts']);
Route::get('/support', ['as' => 'support', 'uses' => 'PagesController@support']);
Route::get('/faq', ['as' => 'faq', 'uses' => 'PagesController@faq']);

Route::group(['middleware' => 'auth'], function()
{
// Profile
    Route::get('/profile', ['as' => 'profile', 'uses' => 'UserController@profile']);

// Change Password
    Route::get('/password/edit', ['as' => 'changePassword', 'uses' => 'UserController@changePassword']);
    Route::post('/password/edit', ['as' => 'changePassword.post', 'uses' => 'UserController@changePasswordPost']);

//Banners
    Route::get('/banners', ['as' => 'banners', 'uses' => 'PagesController@banners']);

// Add Server
    Route::get('/addServer', ['as' => 'addServer', 'uses' => 'ServersController@add']);

// Rate server
    Route::get('/server/{id}/vote', ['as' => 'voteServer', 'uses' => 'ServersController@vote']);
    Route::post('/server/{id}/vote', ['as' => 'voteServer.post', 'uses' => 'ServersController@votePost']);


});

//Servers
Route::get('/server/{id}', ['as' => 'serverPage', 'uses' => 'ServersController@server']);
Route::post('/server/{id}/addComment', ['as' => 'serverAddComment', 'uses' => 'ServersController@addComment']);

// Statistic
Route::get('/server/{id}/statistic', ['as' => 'serverStat', 'uses' => 'ServersController@serverStat']);



// 404
Route::get('404', ['as' => '404', 'uses' => 'ErrorHandlerController@errorCode404']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
