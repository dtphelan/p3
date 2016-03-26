<?php


Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/loremipsum', 'LoremIpsumController@getLoremIpsum');
    Route::post('/loremipsum', 'LoremIpsumController@postLoremIpsum');

    Route::get('/randomuser', 'RandomUserController@getRandomUser');
    Route::post('/randomuser', 'RandomUserController@postRandomUser');

    Route::get('/password', 'PasswordController@getPassword');
    Route::post('/password', 'PasswordController@postPassword');

});
