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

Route::get('/user', function () {
    return response()->json([
        'message' => 'パラメータを指定してください'
    ], 404, [], JSON_UNESCAPED_UNICODE);
});
Route::resource('/user', 'ApiController', ['except' => ['index', 'create', 'edit']]);