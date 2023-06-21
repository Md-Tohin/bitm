<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //  manage product
    public function manageProduct(){
        $products = Product::orderBy('id', 'desc')->get();
        return view('backend.product.manage', compact('products'));
    }

    //  add product
    public function addProduct(){
        return view('backend.product.add');
    }

    //  store product
    public function storeProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->cat_id = $request->cat_id;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->short_desc = $request->short_desc;
        $product->long_desc = $request->long_desc;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img_name = $image->getClientOriginalName();
            $save_path = "assets/upload/product_images/";
            $image->move($save_path, $img_name);
            $image = $save_path.$img_name;
        }else{
            $image = "";
        }
        $product->image = $image;
        $product->save();
        return redirect()->route('manage.product')->with('msg', 'Product inserted successfully!');
    }
}
