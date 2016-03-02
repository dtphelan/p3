<?php


Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/lorem-ipsum', 'LoremIpsumController@getLoremIpsum');
    Route::post('/lorem-ipsum', 'LoremIpsumController@postLoremIpsum');
    Route::get('/random-user', 'RandomUserController@getRandomUser');
    Route::post('/random-user', 'RandomUserController@postRandomUser');
    Route::get('/password', 'PasswordController@getPassword');
    Route::post('/password', 'PasswordController@postPassword');

});
