<?php

Route::group(['namespace' => '\Myblog\Blog\Http\Controllers', 'middleware' => ['web', 'auth'], 'prefix' => 'myblog'], function () {
    Route::get('blogs', 'BlogController@index')->name('myblog.blogs');
    Route::get('blogs/create', 'BlogController@create')->name('myblog.blogs.create');
    Route::post('blogs/create', 'BlogController@store')->name('myblog.blogs.create');
    //Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
