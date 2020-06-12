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

Route::redirect('/','/admin');
Route::group(['prefix'=>'admin','namespace'=>'AdminControllers'],function(){
    Route::group(['as'=>'login'],function(){
        Route::get('/','LoginController@showForm');
        Route::post('/','LoginController@login');
    });
    Route::group(['as'=>'signup'],function(){
        Route::get('/signup','SignupController@showForm');
        Route::post('/signup','SignupController@signup');
    });
    Route::get('/logout','LogoutController@logout')->name('logout');
    Route::get('/menu','MenuController@showForm')->name('menu');
});
Route::group(['prefix'=>'employee','namespace'=>'EmployeeControllers','middleware'=>'checkToken'],function(){
    Route::group(['as'=>'add'],function(){
        Route::get('/add','AddController@showForm');
        Route::post('/add','AddController@addEmployee');
    });
    Route::group(['as'=>'delete'],function(){
        Route::get('/delete','DeleteController@showForm');
        Route::post('delete','DeleteController@deleteEmployee');
    });
    Route::group(['as'=>'modify'],function(){
        Route::get('/modify','ModifyController@showForm');
        Route::post('/modify','ModifyController@modifyEmployee');
    });
    Route::get('/display','DisplayCOntroller@displayEmployees')->name('display');
});
