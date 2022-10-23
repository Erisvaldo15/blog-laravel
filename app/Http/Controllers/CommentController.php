<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request) {
    
        $validated = $request->validate([
            "comment" => "required"
        ]);

        $addComment = Comment::create([
            "comment" => $validated["comment"],
            "user_id" => auth()->user()->id,
            "post_id" => $request->input("post_id"),
        ]);

        return back();
    }
}
