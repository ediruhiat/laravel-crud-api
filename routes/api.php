<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SpecsController;

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

Route::prefix('v1')->group(function (){
    Route::apiResource('products', ProductController::class);
    Route::apiResource('brands', BrandController::class);
    Route::apiResource('specs', SpecsController::class);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
