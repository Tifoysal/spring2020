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
        $all_products=Product::with('category')->get();
        return view('backend.layouts.product-list',compact('all_products'));
    }

    public function createForm()
    {
        $categories=Category::all();

       return view('backend.layouts.product-create-form',compact('categories'));
    }

    public function create(Request $request)
    {

        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|integer',
            'product_category' => 'required|integer',
        ]);


        $file_name = '';
        if ($request->hasFile('product_image')) {
            $product = $request->file('product_image');
            if ($product->isValid()) {
                //generate file name
                $file_name = date('Ymdhms').'.'.$product->getClientOriginalName();
                //store into directory
                $product->storeAs('product', $file_name);
            }
        }

$product=Product::orderBy('id','desc')->first();

    Product::create([
        'category_id'=>$request->product_category,
        'name'=>$request->product_name,
        'price'=>$request->product_price,
        'description'=>$request->product_description,
        'product_image'=>$file_name,
    ]);
    return redirect()->back()->with('message','Product Created Successfully.');

    }

    public function editForm($id)
    {
        //step 01 :get data by id
       $product=Product::find($id);
       // send data to a view
//        dd($product);
        return view('backend.layouts.product-edit',compact('product'));

    }

    public function update(Request $request,$id)
    {
        if ($request->hasFile('product_image')) {
            $product = $request->file('product_image');
            if ($product->isValid()) {
                //generate file name
                $file_name = date('Ymdhms').'.'.$product->getClientOriginalName();
                //store into directory
                $product->storeAs('product', $file_name);
            }
            Product::find($id)->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'product_image'=>$file_name,
                'updated_by'=>auth()->user()->id
            ]);
        }else
        {
            Product::find($id)->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'updated_by'=>auth()->user()->id
            ]);
        }



        return redirect()->route('product');
    }


}
