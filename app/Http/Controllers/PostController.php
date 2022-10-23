<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController
{
 
    public function index()
    {
    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {

        return view('post', [
            "title" => "Post - $post->slug",
            "thereIsHeader" => false,
            "thereIsFooter" => false,
            "post" => $post,
        ]);

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
