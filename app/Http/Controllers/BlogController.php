<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //


    public function show_all_blogs()
    {
        return view('library.blog',['all_blog_data',Blog::all()]);

    }


    public function blog_detail()
    {
        return view('library.blog-detail');

    }
}
