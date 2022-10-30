<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController
{
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Post - $post->slug",
            "thereIsHeader" => false,
            "thereIsFooter" => false,
            "post" => $post,
            "isInAuthorPage" => false,
        ]);
    }

}
