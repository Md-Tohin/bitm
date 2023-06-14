<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //  index
    public function manageProduct(){
        return view('backend.product.index');
    }

    //  add product
    public function addProduct(){
        return view('backend.product.add');
    }

    //  store product
    public function storeProduct(Request $request){
        $product = new Product();
        $product->createProduct($request);
        return redirect()->route('manage.product')->with('msg', 'Product insert successfully!');
    }
}
