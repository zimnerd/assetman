<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AssetCategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AssetCategoryFormFieldController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthenticationController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('status', StatusController::class);
    Route::resource('asset', AssetController::class);
    Route::resource('asset-category', AssetCategoryController::class);
    Route::resource('asset-category-form-field', AssetCategoryFormFieldController::class);
    Route::resource('location', LocationController::class);
});
