<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function showProducts(Request $req){
        $search = $req["search"] ?? "";
        $sort = $req["sort"] ?? "";
        $filter = $req["filter"] ?? "";
        if($search != ""){
            $products = Product::where("name", "LIKE", "%$search%")->get();
        }
        else if($sort != ""){
            if($sort == "ascending") $products = Product::orderBy('price', 'asc')->get();
            else if($sort == "descending") $products = Product::orderBy('price', 'desc')->get();
            else $products = Product::orderBy('created_at', 'desc')->get();
        }
        else if($filter != ""){
            if($filter == "All") $products = Product::orderBy('created_at', 'desc')->get();
            else $products = Product::where("category", "=", $filter)->get();
        }
        else{
            $products = Product::orderBy('created_at', 'desc')->get();
        }
        return view('welcome', ["products" => $products]);
    }

    function addProduct(Request $req){
        $product = new Product();
        $product->id = null;
        $product->name = $req->name;
        $product->price = $req->price;
        $product->category = $req->category;

        // getting image and saving it in public/images
        $image = $req->file("image")->getClientOriginalName();
        $req->image->move(public_path("images"), $image);
        $product->image = $image;
        $product->save();
        return redirect("/");
    }

    function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return redirect("/");
    }

    function editProduct($id){
        $product = Product::find($id);
        return view("/edit", ["product" => $product]);
    }

    function updateProduct(Request $req){
        $product = Product::find($req->id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->category = $req->category;
        $image = $req->file("image")->getClientOriginalName();
        $req->image->move(public_path("images"), $image);
        $product->image = $image;
        $product->save();
        return redirect("/");
    }
}
