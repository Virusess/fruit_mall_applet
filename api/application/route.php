<?php

use think\Route;

//banner
Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');

//theme
Route::get('api/:version/theme','api/:version.Theme/getSimpleList');



//测试路径
//http://z.cn/index.php/api/v1/banner/1
//http://z.cn/index.php/api/v1/theme?ids=1,2,3
