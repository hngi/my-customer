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

// Auth::routes();

/**
 * Authentication Routes
 */
Route::get('/login', 'Auth\LoginController@storeOwnerLogin')->name('login');
Route::get('/register', 'Auth\RegisterController@storeOwnerRegister')->name('register');
Route::post('/login', 'Auth\LoginController@login'); //this will be changed in future to => store/login, user/login
Route::post('/register', 'Auth\LoginController@register');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');