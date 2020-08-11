<?php

Route::get('/', function () {
    // return redirect('/admin/login');
    return '首页';
});
include base_path('routes/admin/admin.php');
// Route::namespace('Admin')->prefix('admin')->group(function() {
//     Route::get('/login', 'LoginController@index')->name('login');
//     Route::post('/login', 'LoginController@login')->name('admin.login');
// });
