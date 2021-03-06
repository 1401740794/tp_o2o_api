<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

//获取banner路由
Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');
//主题
Route::get('api/:version/theme','api/:version.Theme/getSimpleList');
Route::get('api/:version/theme/:id','api/:version.Theme/getComplexOne');

//产品详情
Route::get('api/:version/product/recent','api/:version.Product/getRecent');
Route::get('api/:version/product/by_category','api/:version.Product/getAllInCategory');
Route::get('api/:version/product/:id','api/:version.Product/getOne',[],['id'=>'\d+']);
//分类
Route::get('api/:version/category/all','api/:version.Category/getAllCategories');
//Token
Route::post('api/:version/token/user','api/:version.Token/getToken');
Route::post('api/:version/token/verify','api/:version.Token/verifyToken');
Route::post('api/:version/token/app','api/:version.Token/getAppToken');
//地址
Route::get('api/:version/address','api/:version.Address/getUserAddress');
Route::post('api/:version/address','api/:version.Address/createOrUpdateAddress');
//订单支付
Route::post('api/:version/order','api/:version.Order/placeOrder');
Route::get('api/:version/order/:id','api/:version.Order/getDetail',[],['id'=>'\d+']);
Route::get('api/:version/by_user','api/:version.Order/getSummaryByUser');
Route::get('api/:version/order/paginate','api/:version.Order/getSummary');
Route::post('api/:version/pre_order','api/:version.Pay/getPreOrder');
Route::post('api/:version/notify','api/:version.Pay/receiveNotify');

//测试路由
Route::get('','index/Index/index');