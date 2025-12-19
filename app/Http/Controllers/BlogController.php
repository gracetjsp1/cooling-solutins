<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Show all blogs
    public function index()
    {
        $blogs = Blog::orderBy('publishedDate', 'desc')->paginate(10);
        return view('blog.index', compact('blogs'));
    }

    // Show single blog
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }
}

