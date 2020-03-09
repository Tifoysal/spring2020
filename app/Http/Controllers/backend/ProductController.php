<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $all_products=Product::all();

        return view('layouts.product-list',compact('all_products'));
    }

    public function createForm()
    {
        $categories=Category::all();

       return view('layouts.product-create-form',compact('categories'));
    }

    public function create(Request $request)
    {
//    dd($request->all());

    Product::create([
        'category_id'=>$request->product_category,
        'name'=>$request->product_name,
        'price'=>$request->product_price,
        'description'=>$request->product_description,
    ]);
    return redirect()->back()->with('message','Product Created Successfully.');

    }


}
