<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        if($request->input('search')) {
            $thereSearch = true;
            $posts = Post::search($request->input('search'));
        } else {
            $thereSearch = false;
            $posts = Post::with(['user', 'comment'])->paginate(6);
        }

    
        return view('home', [
            'title' => 'Blog',
            "thereIsHeader" => true,
            "thereIsFooter" => false,
            "thereSearch" => $thereSearch,
            'featured' => $this->featured,
            'posts' => $posts,
            "isInAuthorPage" => false,
        ]);
    }

    public function create()
    {
        return view('page', [
            "title" => 'Page',
            "thereIsFooter" => false,
        ]);
    }
    
}