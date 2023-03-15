<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get("/", function(){
    return view("main-page");
});

Route::get("/shop/add", function(){
    return view("add");
});

Route::get("/brand/{brandName}", [ProductController::class, "brandFilter"]);

Route::get("/product-type/{type}", [ProductController::class, "productTypeFilter"]);

Route::get("/concerns/{concern}", [ProductController::class, "concernFilter"]);

Route::get("/shop", [ProductController::class, "showProducts"]);

Route::get("/shop/filter", [ProductController::class, "filterProducts"]);

Route::post("/shop/add", [ProductController::class, "addProduct"]);

Route::get("/shop/delete/{id}", [ProductController::class, "deleteProduct"]);

Route::get("/shop/edit/{id}", [ProductController::class, "editProduct"]);

Route::post("/shop/update", [ProductController::class, "updateProduct"]);

Route::get("/shop/product/{id}", [ProductController::class, "viewProduct"]);