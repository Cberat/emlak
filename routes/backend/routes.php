<?php
Route::group(["prefix"=>"admin","as"=>"Backend", "namespace" => "Backend"],function(){
        Route::group(['prefix' => 'settings',"as"=>".settings"], function () {
            Route::get("/", "HomeController@index")->name(".index");    
        });
    });
    
    