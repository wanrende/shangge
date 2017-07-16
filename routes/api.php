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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'dashboard', 'middleware' => ['api.auth'], 'namespace' => 'App\Http\Controllers\admin\Api\V1'], function ($api) {
        $api->get('test', function () {
            return 'success!';
        });
        $api->get('logout', 'AuthController@logout');
    });

    $api->post('dashboard/login', 'App\Http\Controllers\admin\Api\V1\AuthController@login');
});
