<?php

Route::group(['namespace'=>'Mj\Send\Http\Controllers'], function()
{
    Route::get('loader',"LoadController@index")->name("loader");
    Route::post("send","LoadController@send")->name("send");
});
