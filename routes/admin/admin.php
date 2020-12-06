<?php

Route::namespace('Admin')->prefix('admin')->group(function() {

    Route::get('login', 'User\LoginController@index')->name('admin.user.login');
	Route::post('login', 'User\LoginController@login')->name('admin.user.log-in');

	Route::middleware(['ckadmin'])->group(function(){
	    Route::get('index', 'IndexController@index')->name('admin.index');
	    Route::get('welcome', 'IndexController@welcome')->name('admin.welcome');
	    Route::get('logout', 'User\LoginController@logout')->name('admin.logout');
		Route::resource('user', 'User\UserController');
    });

});
