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
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('/login', 'Auth\LoginController@login'); //this will be changed in future to => store/login, user/login
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/logout', 'Auth\RegisterController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@home')->name('dashboard');
    Route::get('/transactions', 'TransactionController@index')->name('transactions');
    Route::get('/transactions/{transaction_id}', 'TransactionController@index')->name('transaction.show');
    Route::get('/customers', 'CustomerController@index')->name('customers');
    Route::get('/stores', 'StoreController@index')->name('stores');
    Route::get('/analytics', 'AnalyticsController@index')->name('analytics');
    Route::get('/debts', 'DebtsController@index')->name('debts.reminder');
    Route::get('/broadcast', 'BroadcastController@index')->name('broadcast');
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::get('/user/all', 'UserController@index')->name('users');
    Route::get('/user/{id}', 'UserController@view')->name('user.view');
    Route::get('/assistants/add', 'AssistantsController@index')->name('assistants.add');
    Route::get('/complaint/new', 'ComplaintsController@index')->name('complaint.form');
    Route::get('/complaint', 'ComplaintsController@index')->name('complaint.log');
});
