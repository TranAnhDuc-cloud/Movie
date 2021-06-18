<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

// 
// Route::group(['domain' => '{language}.dev'], function ($language) {
//    config(['app.locale' => $language]); //đặt dòng này ở đầu

   // LANGUAGE
   Route::group(['middleware' => 'locale'], function() {
     Route::get('change/{language}','HomeController@language')->name('language');
   });
   
// });
      // HOME
   Route::get('/','HomeController@index')->name('home');
   Route::get('home','HomeController@index')->name('home');
   Route::get('Home','HomeController@index')->name('home');


   Auth::routes();
   // LOGIN / LOGOUT / REGISTER
   Route::post('login','Auth\LoginController@redirectTo');
   Route::post('register','Auth\RegisterController@register');
   Route::get('logout','Auth\LogoutController@index')->name('logout');
   Route::get('register/active/{token}','Auth\RegisterController@active')->name('register.active');
   // SOCIAL
   Route::get('/auth/redirect/{provider}', 'Auth\AuthController@redirect');
   Route::get('/auth/callback/{provider}', 'Auth\AuthController@callback');


   // Admin
   Route::group(['middleware' => 'admin'], function(){
      Route::get('/admin','Admin\AdminController@index')->name('admin');
      Route::get('/contact','Admin\AdminController@contact')->name('admin.contact');
      Route::prefix('movie')->group(function (){
         Route::get('/','Movie\MovieController@index')->name('admin.movie.index');
         Route::get('/add','Movie\MovieController@show')->name('admin.movie.add');
         Route::post('/add','Movie\MovieController@store')->name('admin.movie.store');
         Route::get('/edit/{id}','Movie\MovieController@edit')->name('admin.movie.edit');
         Route::put('/update/{id}','Movie\MovieController@update')->name('admin.movie.update');
         Route::delete('/delete/{id}','Movie\MovieController@destroy')->name('admin.movie.delete');
         Route::get('/delete/list','Movie\MovieController@deleteList')->name('admin.movie.delete.list');
         Route::put('/restore/{id}','Movie\MovieController@restore')->name('admin.movie.restore');
         Route::delete('/delete/hard/{id}','Movie\MovieController@deleteHard')->name('admin.movie.deleteHard');
      });
      Route::prefix('category')->group(function (){
         Route::get('/','Category\CategoryController@index')->name('admin.category.index');
         Route::get('/add','Category\CategoryController@show')->name('admin.category.add');
         Route::post('/store','Category\CategoryController@store')->name('admin.category.store');
         Route::get('/edit/{id}','Category\CategoryController@edit')->name('admin.category.edit');
         Route::put('/update/{id}','Category\CategoryController@update')->name('admin.category.update');
         Route::delete('/delete/{id}','Category\CategoryController@destroy')->name('admin.category.delete');
         Route::get('/delete/list','Category\CategoryController@deleteList')->name('admin.category.delete.list');
         Route::put('/restore/{id}','Category\CategoryController@restore')->name('admin.category.restore');
         Route::delete('/delete/hard/{id}','Category\CategoryController@deleteHard')->name('admin.category.deleteHard');
      });
      Route::prefix('user')->group(function (){
         Route::get('/','User\UserController@index')->name('admin.user.index');
         Route::get('/info/{id}','User\UserController@info')->name('admin.user.info');
         Route::put('/info/update/{id}','User\UserController@updateAvatar')->name('admin.user.update.avatar');
         Route::get('/add','User\UserController@show')->name('admin.user.add');
         Route::post('/store','User\UserController@store')->name('admin.user.store');
         Route::get('/edit/{id}','User\UserController@edit')->name('admin.user.edit');
         Route::put('/update/{id}','User\UserController@update')->name('admin.user.update');
         Route::delete('/delete/{id}','User\UserController@destroy')->name('admin.user.delete');
         Route::get('/delete/list','User\UserController@deleteList')->name('admin.user.delete.list');
         Route::put('/restore/{id}','User\UserController@restore')->name('admin.user.restore');
         Route::delete('/delete/hard/{id}','User\UserController@deleteHard')->name('admin.user.deleteHard');
      });
      Route::prefix('type')->group(function (){
         Route::get('/{name}','Movie\TypeController@index')->name('admin.type.movie.index');
         Route::get('/{name}/add','Movie\TypeController@show')->name('admin.type.movie.add');
         Route::post('/{name}/add','Movie\TypeController@store')->name('admin.type.movie.store');
         Route::get('/{name}/edit/{id}','Movie\TypeController@edit')->name('admin.type.movie.edit');
         Route::put('/{name}/update/{id}','Movie\TypeController@update')->name('admin.type.movie.update');
         Route::delete('/{name}/delete/{id}','Movie\TypeController@destroy')->name('admin.type.movie.delete.soft');
         Route::get('/{name}/delete/list','Movie\TypeController@deleteList')->name('admin.type.movie.delete.list');
         Route::put('/{name}/restore/{id}','Movie\TypeController@restore')->name('admin.type.movie.restore');
         Route::delete('/{name}/delete/hard/{id}','Movie\TypeController@deleteHard')->name('admin.type.movie.deleteHard');
      });
   });

   //Account
   Route::group(['middleware' =>'auth'], function(){
      Route::prefix('profile')->group(function(){
         Route::get('{name}/{id}','User\AccountController@index')->name('account');
         Route::post('settings/changepassword','User\AccountController@settingPassword')->name('setting.changepassword');
         Route::post('settings/changeinfomation','User\AccountController@settingInfomation')->name('setting.changeinfomation');
         // Route::get('settings/history','User\AccountController@settingHistory')->name('setting.history');
         Route::put('/settings/avatar','User\AccountController@settingAvatar')->name('setting.avatar');
      });
   });

   // Menu
   Route::get('{pages}/{id}/{name}','MenuController@index')->name('menu');
   Route::get('category/{id}','MenuController@category')->name('category.index');
   Route::get('country/{id}','MenuController@country')->name('contry.index');
   Route::get('phimle/{name}','MenuController@typeMovies')->name('single.index');
   Route::get('phimbo/{name}','MenuController@typeMovies')->name('series.index');
   Route::get('phimchieurap/{name}','MenuController@typeMovies')->name('theater.index');
   // Pages
   Route::get('detail/{id}','PagesController@detail')->name('detail.index');
   Route::get('watch/{id}','PagesController@watch')->name('watch.index');
   // Search
   Route::get('/pages/search', 'SearchController@search')->name('user.search');
   Route::get('/admin/search', 'SearchController@searchAdmin')->name('admin.search')->middleware('auth');
   Route::get('/contact/search', 'SearchController@searchContact')->name('admin.contact.search');
   // Job Events Listener
   Route::get('image/index', 'JobController@index');
   Route::post('image/upload', 'JobController@upload');
   Route::get('event/{id}','JobController@processSubmitChangePassword');










