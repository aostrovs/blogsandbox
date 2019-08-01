<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    public function create(Request $request)
    {
        //dd($request->all());
        //dd($request->article);
        $blog = new Blog;
        $blog->title = $request->article_title;
        $blog->body = $request->article;
        $blog->save();
        dd($blog);
    }
    public function all(Request $request)
    {
        $blogs = Blog::all(); //eloquent
        //dd($blogs);
        return view('blogs', ['blogs'=>$blogs]);

    }
}

