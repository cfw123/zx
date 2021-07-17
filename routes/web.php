<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Route::get('test/{id?}', function ($id) {

    dump(\App\Tool\stage\CaseStage::STAGE_FINISH);
    return $id;
});

Route::get('/', 'Home\IndexController@index');

//经典案例
Route::get('/case', 'Home\IndexController@case');
Route::get('/case/{id}', 'Home\IndexController@caseDetail');

//施工工艺
Route::get('/craft', 'Home\IndexController@craft');


// 设计团队
Route::get('/designer', 'Home\DesignerController@index');


// 在建工地
Route::get('/worksite', 'Home\WorksiteController@index');
Route::get('/worksite/{id}', 'Home\WorksiteController@workDetail');


// 品牌中心
Route::get('/news/{id?}', 'Home\NewsController@index');


// 业主服务  免费量房
Route::get('/service', 'Home\ServiceController@index');




Route::get('user/{name?}', function ($name = null) {
    return $name;
});

include base_path('routes/admin/admin.php');