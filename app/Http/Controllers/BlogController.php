<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }
    
    public function getCreatePage()
    {
        return view('blog.create');
    }
    
    public function create(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->article_title;
        $blog->body = $request->article;
        $blog->save();

        return redirect()->route('blog.all');
    }

    public function all(Request $request)
    {
        $blogs = Blog::all();
        return view('blog.all', ['blogs'=>$blogs]);

    }
}

