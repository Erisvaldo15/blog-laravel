<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ProfileController 
{
 
    public function index()
    {
        $posts = Post::where('user_id','=', auth()->user()->id)->paginate(3);

        return view('profile.home', [
            "title" => "Profile - ". auth()->user()->firstName,
            "thereIsHeader" => true,
            "thereIsFooter" => false,
            "posts" => $posts,
        ]);

    }

    public function create()
    {
        return view('profile.create-post', [
            "title" => "New post",
            "thereIsHeader" => true,
            "thereIsFooter" => false,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "user_id" => "required|integer",
            "title" => "required",
            "slug" => "nullable",
            "content" => "required",
            "thumb" => "required|image",
        ]);

        $validated['thumb'] = $validated['thumb']->store('thumb', 'public');
        $validated['slug'] = Str::slug($validated['title']);

        if(Post::create($validated)) {
            return back()->with([
                "postCreatedWithSuccess" => "Post created with success!",
            ]);
        }


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
            "thereIsHeader" => true,
            "thereIsFooter" => false,
            "user" => $user,
        ]);
    }


    public function update(Request $request, User $user)
    {
       $validated = $request->validate([
            "photo" => "required|image",
       ]);

       if($validated['photo']) {
            $pathImage = $validated['photo']->store('photos', 'public');
            $newValidated['photo'] = $pathImage; 
            // Em cima apenas peguei a photo vinda do formulário
            // e a substituí pela photo validada e com o caminho do Storage.
       }
    
        //    $user->update(
        //     $validated
        //    );

       $user->thumb = $newValidated['photo'];

       if($user->save()) {
            return back()->with([
                "upload" => "Upload realized with success!",
            ]);
       }

    }

    public function destroy($id)
    {
        //
    }
    
}
