<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
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
            "isInAuthorPage" => false,
        ]);

    }

    public function create()
    {
        return view('profile.create-post', [
            "title" => "New post",
            "thereIsHeader" => true,
            "thereIsFooter" => false,
            "isInAuthorPage" => false,
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
            "isInAuthorPage" => false,
        ]);
    }


    public function update(Request $request, User $user)
    {
       $validated = $request->validate([
            "photo" => "nullable|image",
            "firstName" => "required",
            "lastName" => "required",
            "description" => "required",
       ]);

       if(Arr::exists($validated, 'photo')) {

            $pathImageDatabase = 'public/'.$user->photo;

            if(Storage::exists($pathImageDatabase)) {
                Storage::delete($pathImageDatabase);
            }

            $pathImage = $validated['photo']->store('photos', 'public'); // Apenas peguei a photo vinda do formulário
            $validated['photo'] = $pathImage; // e a substituí pela photo validada e com o caminho do Storage.
       }

       $update = User::where('id', $user->id)->update($validated);

       if($update) {
            return back()->with("upload", "Upload realized with success!");
       }

    }

    public function destroy($id)
    {
        //
    }
    
}
