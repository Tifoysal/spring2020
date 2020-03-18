<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $all_products = Product::with('category')
            ->paginate(3);
        return view('frontend.layouts.home', compact('all_products'));
    }
}
