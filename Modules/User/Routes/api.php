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

Route::group(['prefix' => 'user'], function() {
    Route::get('', 'UserGetController')->name('userGet');
    Route::post('', 'UserPostController')->name('userPost');
    Route::patch('', 'UserPatchController')->name('userPatch');
    Route::delete('', 'UserDeleteController')->name('userDelete');
});

//TODO we are not using any authentication yet.
/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
