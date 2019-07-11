<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

// 使用composer来实现自动加载功能
require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

// 得到app实例 具体看require的文件
$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

// 调用make方法获得http处理器 $kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// 调用$kernel的handle方法处理Laravel request 对象
$response = $kernel->handle(
    // 使用capture获取一个HTTP的请求对象
    $request = Illuminate\Http\Request::capture()
);

// 将response返回给客户端
$response->send();

// 触发 $terminatingCallbacks 注册的回调
// vendor/laravel/framework/src/Illuminate/Foundation/Application.php 1016
$kernel->terminate($request, $response);
