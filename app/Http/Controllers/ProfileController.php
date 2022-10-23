<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController 
{
 
    public function index()
    {
        $userLogged = User::where('email','=', session('logged'));
        $posts = Post::where('user_id','=', $userLogged->first()->id)->paginate(3);

        return view('profile.home', [
            "title" => "Profile - {$userLogged->first()->firstName}",
            "thereIsHeader" => true,
            "thereIsFooter" => false,
            "posts" => $posts,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {

        dd('show');
        // $user = User::where('firstName',$user)->with(['post', 'comment'])->orderBy('id', 'desc')->get();

        // // dd($user);
        
        // return view('profile.posts', [
        //     "title" => "Posts of {$user->first()->firstName}",
        //     "thereIsFooter" => false,
        //     "data" => $user,
        // ]);

    }

   
    public function edit(User $user)
    {
        return view('profile.edit', [
            "title" => "Edit your profile",
            "thereIsFooter" => false,
            "user" => $user,
        ]);
    }


    public function update()
    {
       dd('updated');
    }

    public function destroy($id)
    {
        //
    }
    
}
