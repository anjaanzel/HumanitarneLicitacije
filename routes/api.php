<?php

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::post('signin', 'SignInController')->name('signin');
    Route::post('signout', 'SignOutController');
    
    Route::get('me', 'MeController');
});