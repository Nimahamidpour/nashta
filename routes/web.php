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

Auth::routes();

Route::get('/', 'IndexController@index')->name('index');
Route::get('/news/{news}', 'NewsController@show')->name('news');
Route::get('/about-us', 'AboutUsController@index')->name('aboutus');
Route::get('/guid', 'AboutUsController@show')->name('guid');


//  ****** order  ******
Route::get('/day-order/', 'FoodController@showDayOrder')->name('day-order');
Route::get('/pre-order/', 'FoodController@showPreOrder')->name('pre-order');
Route::post('/order/addToCart/', 'FoodController@addToCart')->name('add-to-cart');
Route::post('/order/minesCart/', 'FoodController@minesCart')->name('mines-cart');
Route::post('/order/updateCart/', 'FoodController@updateCart')->name('update-cart');
Route::get('/order/removecart/{id}', 'FoodController@removecart')->name('remove-cart');
//  ****** order  ******

//********* panel user ***********
Route::prefix('panel/')->middleware('auth')->group(function() {

    Route::post('/address/add/', 'UserController@addAddress')->name('user-add-address');


    // ********** order *******
    Route::get('/order/basket', 'UserController@show')->name('user-panel-basket');
    Route::get('/order/setTimeAndAddress', 'UserController@timeAndAddress')->name('user-panel-time');
    Route::post('/order/final', 'UserController@finalorder')->name('user-panel-finalorder');
    Route::post('/order/buy', 'UserController@buy')->name('user-panel-buy');
    Route::get('/order/factor', 'UserController@callBack')->name('call-back-pay');
    // ********** order **********

    // ************ edit user **********
    Route::get('/user/edit/{user}', 'UserController@edit')->name('edit-user');
    Route::post('/user/update/{user}', 'UserController@update')->name('update-user');
    // ************ edit user **********

    //******** list order **********
    Route::get('/listorder', 'UserController@listorder')->name('listorder');
    Route::get('/moreinfo/{order}', 'UserController@moreinfo')->name('order-more-info');
    //******** list order **********
});
//********* panel user ***********



// ****** admin login *******
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
});


Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin.dashboard');


    Route::get('/customer/list', 'AdminController@listCustomer')->name('admin-customer-list');
    Route::get('/customer/list/order/{user}', 'AdminController@customerOrder')->name('admin-customer-list-order');
    Route::get('/customer/list/address/{user}', 'AdminController@customerAddress')->name('admin-customer-list-address');



    Route::get('/order/list', 'AdminController@listOrder')->name('admin-order-list');
    Route::get('/order/list/day', 'AdminController@listOrderDay')->name('admin-order-list-day');
    Route::get('/moreinfo/{order}', 'AdminController@moreinfo')->name('admin-order-more-info');


    Route::get('/food/list', 'AdminController@listFood')->name('admin-food-list');
    Route::get('/food/list/order/{food}', 'AdminController@listFoodOrder')->name('admin-food-order-list');
    Route::get('/food/dayorder/update/{food}', 'AdminController@updateFoodDayOrder')->name('admin-food-update-day-order');


});
// ****** admin login *******
