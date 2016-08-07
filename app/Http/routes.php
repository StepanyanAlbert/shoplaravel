<?php


Route::get('/', [
    'uses'=>'ProductController@getIndex',
    'as'=>'product.index'
]);

Route::get('/add-to-cart/{id}',[
    'uses'=>'ProductController@getAddtoCart',
    'as'=>'product.addToCart'
]);
Route::get('/shoppingcart',[
    'uses'=>'ProductController@getCart',
    'as'=>'product.shoppingCart'
]);
Route::get('/checkout',[
    'uses'=>'ProductController@getCheckout',
    'as'=>'checkout'
]);
Route::post('/checkout',[
    'uses'=>'ProductController@postCheckout',
    'as'=>'checkout',
    'middleware'=>'auth'

]);
Route::group(['prefix'=>'user'],function (){

    Route::group(['middleware'=>'guest'],function (){

        Route::get('/signup', [
            'uses'=>'UserController@getSignup',
            'as'=>'user.signup',
        ]);

        Route::post('/signup', [
            'uses'=>'UserController@postSignup',
            'as'=>'user.signup',

        ]);

        Route::get('/signin', [
            'uses'=>'UserController@getSignin',
            'as'=>'user.signin',

        ]);
        Route::post('/signin', [
            'uses'=>'UserController@postSignin',
            'as'=>'user.signin',

        ]);
    });
    Route::group(['middleware'=>'auth'],function (){

        Route::get('/profile',[
            'uses'=>'UserController@getProfile',
            'as'=>'user.profile',

        ]);
        Route::get('/logout',[
            'uses'=>'UserController@getLogout',
            'as'=>'user.logout',
        ]);
    });


});

