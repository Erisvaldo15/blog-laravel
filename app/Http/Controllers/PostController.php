<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

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
            "isLogged" => Auth::check() ? false : true,
            // verifica se o usuário está logado, se estiver
            // o 'flex-col' não será ativado, se não estiver
            // será ativado.
        ]);
    }

}
