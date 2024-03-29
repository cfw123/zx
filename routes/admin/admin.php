<?php
/**
 * Created by PhpStorm.
 * User: 35066
 * Date: 2020/10/19
 * Time: 9:57
 */

// 后台管理
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['checklogin:admin.login']], function () {

    // 登录显示admin/login
    Route::get('login', 'LoginController@index')->name('admin.login');
    // 登录处理
    Route::post('login', 'LoginController@login')->name('admin.login');


    // 定义后台主页路由
    Route::get('index', 'IndexController@index')->name('admin.index');
    Route::get('welcome', 'IndexController@welcome')->name('admin.welcome');
    Route::get('test', 'IndexController@test')->name('admin.test');


    // 公用的方法
    // 图片上传
    Route::post('upfile/{foldername?}', 'PublicController@upfile')->name('admin.upfile');


    // 用户退出
    Route::get('logout', 'IndexController@logout')->name('admin.logout');


    // 轮播图
   Route::resource('/nav','NavController', ['as' => 'admin']);

   // 设计师 工长
   Route::resource('/designer','DesignerController', ['as' => 'admin']);


    // 案例管理
    Route::resource('/case','CaseController', ['as' => 'admin']);

    // 在建工地管理
    Route::get('/worksite','GongdiController@index', ['as' => 'admin'])->name('admin.worksite.index');


});

Route::post('service/upload/{type}', 'Service\UploadController@uploadFile')->name('service.upload');