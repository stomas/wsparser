<?php

Route::group(['middleware'=> ['web']], function(){
   Route::get('/wsparser/index', 'Stomas\WSParser\Controllers\IndexController@index');

    Route::post('/wsparser/teams/store', 'Stomas\WSParser\Controllers\TeamController@store');
});