<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('admin.login'));
});

// Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Auth','controller' => 'AdminAuthController'],function(){
    Route::get('/login','showLoginForm')->name('login');
    Route::post('/login','login')->name('login');
    Route::post('/logout','logout')->name('logout');
});




Route::prefix('admin')->as('admin.')->middleware('auth:admin')->namespace('App\Http\Controllers\Administrator')->group(function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/profile', 'DashboardController@profile')->name('profile');
    Route::post('/update-profile', 'DashboardController@update_profile')->name('update_profile');
    Route::post('/change-password', 'DashboardController@change_password')->name('change_password');
    Route::get('/employe','EmployeController@employe')->name('employe');
    Route::get('/allempoye','EmployeController@allempoye')->name('allempoye');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
