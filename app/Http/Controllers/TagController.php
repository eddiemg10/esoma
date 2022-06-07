<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function create()
    {
        return view('blog.posts.tagscreate');
    }
}
