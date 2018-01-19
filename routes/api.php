<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//z laravel自带 basic 认证，即弹出对话框输入用户名密码，使用原有的用户系统
Route::get('basic_auth', function () {
    return 'basic_auth';
})->middleware('auth.basic');

// 自定义 Basic 认证
Route::get('custom_basic_auth', function () {
    return 'custom_basic_auth';
})->middleware('auth.basic.once');

//可在config/auth.php文件查看
//guards
//
// laravel 自带 session 认证
Route::get('session_auth', function () {
    return 'session auth';
})->middleware('auth');
//->middleware('auth:web')

// laravel 自带 token 认证
Route::get('token_auth', function () {
    return 'token_auth';
})->middleware('auth.token');
