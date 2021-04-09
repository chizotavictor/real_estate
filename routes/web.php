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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/listing/rent', 'IndexController@rent')->name('rent');
Route::get('/listing', 'IndexController@buy')->name('buy');
Route::get('/listing/{id}', 'IndexController@description')->name('description');
Route::post('/interest', 'IndexController@interest')->name('interest');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/properties', 'PropertyController@index')->name('property');
    Route::get('/properties/add', 'PropertyController@add')->name('property.add');
    Route::post('/properties/add', 'PropertyController@addSubmit')->name('property.add');
    
    Route::get('/deposits', 'TransactionController@deposits')->name('deposits');
    Route::get('/deposits-history', 'TransactionController@depositsHistory')->name('deposits.history');
    Route::get('/transactions', 'TransactionController@all')->name('transactions');
    Route::get('/income', 'TransactionController@income')->name('income');
    Route::get('/referrals',    'ReferralController@index')->name('referrals');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('/profile', 'HomeController@profileUpdate')->name('profile');

    Route::post('/deposit', 'TransactionController@deposit')->name('deposit');
    Route::get('/deposit/payment/{id}', 'TransactionController@payment')->name('payment');
    Route::post('/deposit/payment/proof', 'TransactionController@proof')->name('proof');
    Route::get('/withdrawal', 'TransactionController@withdrawalRequests')->name('withdrawal');
    Route::post('/withdrawal', 'TransactionController@withdrawalRequest')->name('withdrawal');

    Route::get('/withdrawal-request', 'TransactionController@withdrawalRequests')->name('withdrawal-request');
    Route::post('/withdrawal-request', 'TransactionController@withdrawalRequest')->name('withdrawal-request');

    Route::get('/admin-deposits', 'TransactionController@adminDeposits')->name('admin-deposits');
    Route::get('/admin-deposits/confirm', 'TransactionController@adminConfirmDeposits')->name('admin-confirm-deposits');
    Route::get('/admin-users', 'HomeController@getUsers')->name('admin-users');
    
    Route::get('/admin-withdrawal-request', 'TransactionController@adminWithdrawalRequest')->name('admin-withdrawal-request');
    Route::get('/confirm-withdrawal-request', 'TransactionController@adminManageWithdrawal')->name('confirm-withdrawal-request');

    Route::get('/admin-edit-plan/{id}', 'HomeController@editPlan')->name('plan.edit');
    Route::post('/admin-edit-plan', 'HomeController@editPlanSubmit')->name('admin.plan.edit.submit');

    Route::get('/user/delete', 'HomeController@userDelete')->name('user.delete');
    
    Route::get('/admin-get-user-referral/{user_id}', 'HomeController@getUserReferral')->name('admin-get-user-referral');
});

