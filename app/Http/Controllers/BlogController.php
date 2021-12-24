<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //


    public function show_all_blogs()
    {
        return view('library.blog');

    }
}
