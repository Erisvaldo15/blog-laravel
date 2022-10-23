<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        // dd(session('logged'));

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
        ]);
    }

    public function create()
    {
        return view('page', [
            "title" => 'Page',
            "thereIsFooter" => false,
        ]);
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

    

    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}