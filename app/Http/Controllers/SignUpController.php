<?php

namespace App\Http\Controllers;

use app\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;

class SignUpController extends Controller
{
    public function create()
    {
        return view("signUp", [
            "title" => "Blog - Sign Up",
            "thereIsHeader" => true,
            "thereIsFooter" => false,
            "isInAuthorPage" => false,
        ]);
    }

    public function store(RegisterRequest $request) {

        $validated = $request->validated();

        $userFound = User::where('email', '=', $validated['email'])->first();

        if(!$userFound) {   
            User::create($validated);
            return back()->with('register-success', 'Register realized with success');
        }

        return back()->withErrors(['found' => 'E-mail already existent']);
    }

}
