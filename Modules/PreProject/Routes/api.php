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

/* Route::group(['prefix' => 'preproject', 'middleware' => 'jwt.auth'], function() { */
Route::group(['prefix' => 'preproject'], function() {
    Route::get('', 'PreProjectGetController')->name('preprojectGet');
    Route::post('', 'PreProjectPostController')->name('preprojectPost');
    Route::patch('', 'PreProjectPatchController')->name('preprojectPatch');
    Route::delete('', 'PreProjectDeleteController')->name('preprojectDelete');
});