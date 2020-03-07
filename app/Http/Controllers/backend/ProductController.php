<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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
       return view('layouts.product-create-form');
    }
}
