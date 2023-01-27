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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/add", function(){
    return view("add");
});

Route::get("/", [ProductController::class, "showProducts"]);

Route::post("/add", [ProductController::class, "addProduct"]);

Route::get("/delete/{id}", [ProductController::class, "deleteProduct"]);

Route::get("/edit/{id}", [ProductController::class, "editProduct"]);

Route::post("/update", [ProductController::class, "updateProduct"]);