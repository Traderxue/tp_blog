<?php

use think\Facade\Route;


Route::group("/",function(){

    Route::rule("/login","admin/login","get|post");
});