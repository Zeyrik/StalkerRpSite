<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('index', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('post', compact('post'));
    }
}
