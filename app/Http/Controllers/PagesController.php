<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //$posts = Post::orderBy('created_at', 'desc')->paginate(10);
        //return view('pages.index')->with('posts', $posts);
        return view('index');
    }

    public function onderzoek()
    {
        return view('pages.archeologisch-onderzoek');
    }
}
