<?php

Auth::routes();

Route::group(['namespace' => 'Auth'], function (){
    Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','RegisterController@postRegister')->name('post.register');

    Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','LoginController@postLogin')->name('post.login');

    Route::get('dang-xuat','LoginController@getLogout')->name('get.logout.user');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('get.list.product');
Route::get('san-pham/{slug}-{id}','ProductDetailController@productDetail')->name('get.detail.product');

Route::prefix('shopping')->group(function (){
   Route::get('/add/{id}','ShoppingCartController@addProduct')->name('add.shopping.cart');
   Route::get('/danh-sach','ShoppingCartController@getListShoppingCart')->name('get.list.shopping.cart');
});

Route::get('lien-he','ContactController@getContact')->name('get.contact');
Route::post('lien-he','ContactController@saveContact');
