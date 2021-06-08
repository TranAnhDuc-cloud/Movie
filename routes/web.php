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
      Route::get('/contact','Admin\AdminController@contact')->name('contact');
      Route::prefix('movie')->group(function (){
         Route::get('/','Movie\MovieController@index')->name('admin.movie.index');
         Route::get('/add','Movie\MovieController@show')->name('admin.movie.add');
         Route::post('/add','Movie\MovieController@store')->name('admin.movie.store');
         Route::get('/edit/{id}','Movie\MovieController@edit')->name('admin.movie.edit');
         Route::put('/update/{id}','Movie\MovieController@update')->name('admin.movie.update');
         Route::delete('/delete/{id}','Movie\MovieController@destroy')->name('admin.movie.delete');
      });
      Route::prefix('category')->group(function (){
         Route::get('/','Category\CategoryController@index')->name('admin.category.index');
         Route::get('/add','Category\CategoryController@show')->name('admin.category.add');
         Route::post('/store','Category\CategoryController@store')->name('admin.category.store');
         Route::get('/edit/{id}','Category\CategoryController@edit')->name('admin.category.edit');
         Route::put('/update/{id}','Category\CategoryController@update')->name('admin.category.update');
         Route::delete('/delete/{id}','Category\CategoryController@destroy')->name('admin.category.delete');
      });
      Route::prefix('user')->group(function (){
         Route::get('/','User\UserController@index')->name('admin.user.index');
         Route::get('/info/{name}/{id}','User\UserController@info')->name('admin.user.info');
         Route::get('/add','User\UserController@show')->name('admin.user.add');
         Route::post('/store','User\UserController@store')->name('admin.user.store');
         Route::get('/edit/{id}','User\UserController@edit')->name('admin.user.edit');
         Route::put('/update/{id}','User\UserController@update')->name('admin.user.update');
         Route::delete('/delete/{id}','User\UserController@destroy')->name('admin.user.delete');
      });
      Route::prefix('type')->group(function (){
         Route::get('/{name}','Movie\TypeController@index')->name('admin.type.movie.index');
         Route::get('/{name}/add','Movie\TypeController@show')->name('admin.type.movie.add');
         Route::post('/{name}/add','Movie\TypeController@store')->name('admin.type.movie.store');
         Route::get('/{name}/edit/{id}','Movie\TypeController@edit')->name('admin.type.movie.edit');
         Route::put('/{name}/update/{id}','Movie\TypeController@update')->name('admin.type.movie.update');
         Route::delete('/{name}/delete/{id}','Movie\TypeController@destroy')->name('admin.type.movie.delete');
      });
   });

   //Account
   Route::get('account/{name}/{id}','User\AccountController@index')->name('account');
   // Menu
   Route::get('{pages}/{id}/{name}','MenuController@index')->name('menu');
   Route::get('category/{id}','MenuController@category')->name('category.index');
   Route::get('country/{id}','MenuController@country')->name('contry.index');
   Route::get('phimle/{name}','MenuController@typeMovies')->name('single.index');
   Route::get('phimbo/{name}','MenuController@typeMovies')->name('series.index');
   Route::get('phimchieurap/{name}','MenuController@typeMovies')->name('theater.index');
   // DETAIL
   Route::get('detail/{id}','Movie\MovieController@detail')->name('detail.index');
   // WATCH
   Route::get('watch/{id}','Movie\MovieController@watch')->name('watch.index');
   // Search
   Route::get('/pages/search', 'SearchController@search')->name('user.search');
   Route::get('/admin/search', 'SearchController@searchAdmin')->name('admin.search');











