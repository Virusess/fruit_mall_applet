<?php

use think\Route;

//banner
Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');

//theme
Route::get('api/:version/theme','api/:version.Theme/getSimpleList');
Route::get('api/:version/theme/:id','api/:version.Theme/getComplexOne');

//product
Route::get('api/:version/product/recent','api/:version.Product/getRecent');
Route::get('api/:version/product/by_category/:id','api/:version.Product/getAllInCategory');
Route::get('api/:version/product/:id','api/:version.Product/getOne');

//category
Route::get('api/:version/category/all','api/:version.Category/getAllCategories');


//token
Route::post('api/:version/token/user','api/:version.Token/getToken');




//测试路径
//http://z.cn/index.php/api/v1/banner/1         轮播图
//http://z.cn/index.php/api/v1/theme?ids=1,2,3  主题
//http://z.cn/index.php/api/v1/theme/1          主题下的产品
//http://z.cn/index.php/api/v1/product/recent   最新产品
//http://z.cn/index.php/api/v1/category/all     所有分类
//http://z.cn/index.php/api/v1/product/by_category/3       根据分类查询产品
//http://z.cn/index.php/api/v1/token/user       获取token
//http://z.cn/index.php/api/v1/product/1       获取商品详情

