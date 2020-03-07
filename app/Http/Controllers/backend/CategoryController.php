<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {

    $all_data=Category::paginate(5);
    $title='Category List show';

        return view('layouts.category-list',compact('all_data','title'));
    }


    public function create(Request $request)
    {


        Category::create([
//            'column name'=>'input / value'
            'name'=>$request->category_name
        ]);
    return redirect()->back();
    }
}
