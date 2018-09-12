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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

////////// Home Page
Route::get('/home', 'HomeController@index')->name('home');

////////// Dashboard
Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');

///////// Delete Account
Route::get('/deleteAccount', 'UsersController@destroy');

///////// Change Password
Route::get('/changePassword', 'ChangePasswordController@index')->name('changePassword');
Route::post('/changePassword', 'ChangePasswordController@update');

///////// Subscriptions
Route::get('/subscriptions', 'SubscriptionsController@index')
    ->name('show_plans');
Route::group(['prefix' => 'subscriptions'], function(){
    Route::get('/cancel', 'SubscriptionsController@cancel')
        ->name('cancel_subscription');
    Route::get('/resume', 'SubscriptionsController@resume')
        ->name('resume_subscription');
    Route::get('/delete', 'SubscriptionsController@destroy')
        ->name('delete_subscription');
    Route::get('/creditcard', 'SubscriptionsController@updatecard');
});



//////// Billing
Route::get('/charge/{plan_id}', 'ChargeController@index');
Route::post('/charge', 'ChargeController@store');

//Route::post('/dashboard/add_bank_account', 'BankAccountsController@create');
////////
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/show/{id}', 'PostsController@show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
