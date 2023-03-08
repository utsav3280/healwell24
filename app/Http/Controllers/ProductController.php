<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // page load
    function showProducts(Request $req){
        $products= Product::all()->shuffle();
        return view('welcome', ["products" => $products]);
    }

    // page filter
    function filterProducts(Request $req){
        $search = $req["search"] ?? "";
        $brand = $req["Brand"] ?? "";
        $type = $req["type"] ?? "";
        $sort = $req["sort"] ?? "";
        if($search != ""){
            $products = Product::where("name", "LIKE", "%$search%")->get();//sql query
        }
        else{
            if($brand == "" && $type == "") {
                $products= Product::orderBy('created_at', 'desc')->get();
            }
            else if($brand == "" && $type != ""){
                $products = DB::table('products')
                ->whereIn('type', $type)
                ->get();
            }
            else if($brand != "" && $type == ""){
                $products = DB::table('products')
                ->whereIn('brand', $brand)
                ->get();
            }
            else{
                $products = DB::table('products')
                ->whereIn('brand', $brand)
                ->whereIn('type', $type)
                ->get();
            }
        }
        if($sort == "ascending") $sortedProducts = collect($products)->sortBy('price')->values()->all();
        else if($sort == "descending") $sortedProducts = collect($products)->sortByDesc('price')->values()->all();
        else $sortedProducts = collect($products)->sortByDesc('created_at')->values()->all();

        // featured products at top
        $featuredProducts = collect($sortedProducts)->sortByDesc('featured')->values()->all();
        return view('welcome', ["products" => $featuredProducts]);
    }

    // brand filter
    function brandFilter($brandName){
        $products = Product::where('brand', $brandName)->get();

        // featured products at top
        $featuredProducts = collect($products)->sortByDesc('featured')->values()->all();
        return view('welcome', ["products" => $featuredProducts]);
    }

    // type filter
    function productTypeFilter($productType){
        $products = Product::where('type', $productType)->get();

        // featured products at top
        $featuredProducts = collect($products)->sortByDesc('featured')->values()->all();
        return view('welcome', ["products" => $featuredProducts]);
    }

    // concern filter
    function concernFilter($concern){
        $products = Product::where('category', 'LIKE', '%"'.$concern.'"%')->get();

        // featured products at top
        $featuredProducts = collect($products)->sortByDesc('featured')->values()->all();
        return view('welcome', ["products" => $featuredProducts]);
    }

    // add new product
    function addProduct(Request $req){
        $product = new Product();
        $product->id = null;// automatic
        $product->name = $req->name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->brand = $req->brand;
        $product->type = $req->type;
        $product->category = json_encode($req->category);

        if($req->featured == "true"){
            $product->featured = "true";
        }
        else{
            $product->featured = "false";
        }

        // multiple images upload
        $images = $req->file('image');
        $images_array = [];
        foreach ($images as $link) {
            $uploadedFile = cloudinary()->upload($link->getRealPath());
            $images_array[] = $uploadedFile->getSecurePath();
        }
        $product->image = json_encode($images_array);
        
        // single image upload
        // $image = cloudinary()->upload($req->file('image')->getRealPath())->getSecurePath();
        // $product->image = $image;
        $product->save();
        return view("/preview", ["product" => $product]);
    }

    // view product
    function viewProduct($id){
        $product = Product::find($id);
        return view("/viewproduct", ["product" => $product]);
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
        $image = cloudinary()->upload($req->file('image')->getRealPath())->getSecurePath();
        $product->image = $image;
        $product->save();
        return redirect("/");
    }
}
