<?php
//
//Route::group(['module' => 'Student', 'middleware' => ['web'], 'namespace' => 'App\Modules\Student\Controllers'], function() {
//
//    Route::resource('Student', 'StudentController');
//
//});

Route::group(['module' => 'Student', 'namespace' => 'App\Modules\Student\Controllers'], function () {

    Route::group(['middleware' => ['web']], function () {

        Route::group(array('prefix' => 'student'), function () {

            Route::get('/home','StudentController@home');
            Route::post('/home','StudentController@home');
            Route::get('/start_test','StudentController@start_test');

        });
    });

});
