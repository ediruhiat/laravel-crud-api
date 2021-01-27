<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Brand;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function() {
    $products = Product::all();

    return View::make('products')->with('products', $products);
});

Route::get('/brands', function() {
    $brands = Brand::all();

    return View::make('brands')->with('brands', $brands);
});