<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    function index() 
    {
    $articles = Article::get();
    return view('articles/index',['articles'=>$articles]);
    }

    function show($id)
    {
        $article = Article::where('id', '=', $id)->first();
        return view('articles/show', ['article' => $article]);
    }

    function destroy($id)
    {
        Article::destroy($id);
        $articles = Article::get();
        return view('articles/index',['articles'=>$articles]);
    }

    function create()
    {
        return view('articles/create');
    }

    function store()
    {
        Article::insert(
            [
            'title'=>$_POST['tit'],
            'description'=>$_POST['des'],
            'content'=>$_POST['cont'],
            'category_id'=>$_POST['catid']
            ]);
        $articles = Article::get();
        return view('articles/index',['articles'=>$articles]);
    }
    
    function edit($id)
    {
        $article = Article::where('id', '=', $id)->first();
        return view('articles/edit', ['article' => $article]);
    }

    function update($id)
    {
        $article = Article::where('id','=',$id)->first();
        $article->title = $_POST['tit'];
        $article->description= $_POST['des'];
        $article->content= $_POST['cont'];
        $article->save();
        return redirect()->route('articles.index');
    }
}
