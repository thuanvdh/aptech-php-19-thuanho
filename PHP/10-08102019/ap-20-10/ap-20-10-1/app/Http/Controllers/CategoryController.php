<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function cate()
    {
        $categories = Category::get();
        return view('categories',['categories'=>$categories]);
    }
}
