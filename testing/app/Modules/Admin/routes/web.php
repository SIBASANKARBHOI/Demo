<?php
//
//Route::group(['module' => 'Admin', 'middleware' => ['web'], 'namespace' => 'App\Modules\Admin\Controllers'], function() {
//
//    Route::resource('Admin', 'AdminController');
//
//});


Route::group(['module' => 'Admin', 'namespace' => 'App\Modules\Admin\Controllers'], function () {

    Route::group(['middleware' => ['web']], function () {

        Route::group(array('prefix' => 'admin'), function () {


            Route::get('/login','AdminController@login');
            Route::post('/login','AdminController@login');

            Route::get('/home','AdminController@home');
            Route::post('/home','AdminController@home');

            Route::post('/deleteQuestion','AdminController@deleteQuestion');

            Route::get('/logout','AdminController@logout');

            Route::get('/addQuestion','AdminController@addQuestion');
            Route::post('/addQuestion','AdminController@addQuestion');

            Route::get('/editQstnPaper/{Q_no}','AdminController@editQstnPaper');
            Route::get('/viewQuestionAjaxHandler','AdminController@viewQuestionAjaxHandler');

            Route::get('/editQuestion','AdminController@editQuestion');
            Route::post('/editQuestion','AdminController@editQuestion');


            Route::get('importExport', 'MaatwebsiteDemoController@importExport');

            Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');

            Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

            Route::get('/viewTable','AdminController@viewTable');




        });
    });

});