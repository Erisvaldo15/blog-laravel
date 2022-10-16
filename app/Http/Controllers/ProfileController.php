<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
 
    public function index()
    {
        return view('profile.home', [
            "title" => "Profile - " . session('logged'),
            "thereIsFooter" => false,
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

    public function show($user)
    {
        $user = User::where('firstName',$user)->with(['post', 'comment'])->orderBy('id', 'desc')->get();

        // dd($user);
        
        return view('profile.posts', [
            "title" => "Posts of {$user->first()->firstName}",
            "thereIsFooter" => false,
            "data" => $user,
        ]);

    }

   
    public function edit()
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
