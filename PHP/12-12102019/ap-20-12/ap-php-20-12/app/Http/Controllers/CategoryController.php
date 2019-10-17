<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    function index() 
    {
    $categories = Category::get();
    return view('categories/index',['categories'=>$categories]);
    }

    function show($id)
    {
        $category = Category::where('id', '=', $id)->first();
        return view('categories/show', ['category' => $category]);
    }

    function destroy($id)
    {
        Category::destroy($id);
        $categories = Category::get();
        return view('categories/index',['categories'=>$categories]);
    }

    function create()
    {
        return view('categories/create');
    }

    function store()
    {
        Category::insert(
            [
            'name'=>$_POST['name'],
            'des'=>$_POST['des'],
            ]);
        $categories = Category::get();
        return view('categories/index',['categories'=>$categories]);
    }
    
    function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        return view('categories/edit', ['category' => $category]);
    }

    function update($id)
    {
        $category = Category::where('id','=',$id)->first();
        $category->name = $_POST['name'];
        $category->des= $_POST['des'];
        $category->save();
        return redirect()->route('categories.index');
    }
}
