<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function (){
    die('this is admin and register tis rout by own package');
});   

Route::namespace('\Smd\Cms\Http\Controllers')->middleware('admin')->group(function(){
    Route::get('/admin/index', 'AdminController@index');
    Route::get('/config', function(){
        echo config('cms.url');
    });
});
