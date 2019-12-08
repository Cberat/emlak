<?php
Route::group(["as"=>"Frontend", "namespace" => "Frontend"],function(){
    Route::get("/", "HomeController@index")->name(".index");
    Route::get("/emlak", "HomeController@emlak")->name(".emlak");
    Route::get("/emlaklar", "HomeController@emlaklar")->name(".emlaklar");
    Route::get("/iletisim", "HomeController@iletisim")->name(".iletisim");
    
});