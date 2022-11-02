<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request) {
    
        $validated = $request->validate([
            "comment" => "required"
        ]);

        if(!Auth::check()) {
            return back()->withErrors(["notLogged" => "Ops, you aren'n logged. Please, do sign in!"]);
        }

        Comment::create([
            "comment" => $validated["comment"],
            "user_id" => auth()->user()->id,
            "post_id" => $request->input("post_id"),
        ]);

        return back()->with('success-comment', 'Comment added with success!');
    }
}
