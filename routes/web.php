<?php

use Illuminate\Support\Facades\Route;



// Fornt site
Route::get('/', 'Frontend\HomeController@view')->name('home');



//Backend site

//Route::get('/dashboard', 'Backend\AdminController@view')-> name('dashboard');

Auth::routes();




Route::group(['middleware' =>['admin']], function () {
     Route::get('/home', 'Backend\AdminController@dashboard')->name('dashboard');
    
     Route::prefix('home/category')->group(function () {


          Route::get('/view', 'Backend\CategoryController@view')->name('category.view');
          Route::get('/add', 'Backend\CategoryController@add')->name('category.add');
          Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('category.edit');
          Route::get('/delete/{id}', 'Backend\CategoryController@delete')->name('category.delete');
          Route::post('/update/{id}', 'Backend\CategoryController@update')->name('category.update');
          Route::post('/store', 'Backend\CategoryController@store')->name('category.store');
     });
});


//Route::group(['middleware' => ['auth', 'admin']], function () {

     Route::prefix('product')->group(function () {


          Route::get('/view', 'Backend\ProductController@view')->name('product.view');
          Route::get('/add', 'Backend\ProductController@add')->name('product.add');
          Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('product.edit');
          Route::get('/delete/{id}', 'Backend\ProductController@delete')->name('product.delete');
          Route::post('/update/{id}', 'Backend\ProductController@update')->name('product.update');
          Route::post('/store', 'Backend\ProductController@store')->name('product.store');
     });
//s});


//Route::group(['middleware' => ['auth', 'customer']], function () {
     Route::prefix('product')->group(function () {
          Route::get('/details/{id}', 'Backend\ProductController@details')->name('product.details')->middleware('customer');
     });
//});

Route::get('/login_check', 'Backend\CheckoutController@login_check')->name('login_check');
Route::post('/customer_reg', 'Backend\CheckoutController@customer_reg')->name('customer_reg');

Route::group(['middleware' => 'customer'], function () {
     Route::post('/add_to_cart', 'Backend\CartController@add')->name('add_to_cart');
     Route::get('/show_cart', 'Backend\CartController@show_cart')->name('show_cart')->middleware('customer');
     Route::get('/cart/item_remove{id}', 'Backend\CartController@item_remove')->name('item_remove');
     Route::get('/checkout', 'Backend\CheckoutController@checkout')->name('checkout');

});


