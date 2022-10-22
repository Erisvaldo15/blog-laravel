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
            "subHeader" => false,
            "thereIsFooter" => false,
        ]);
    }

    public function store(RegisterRequest $request) {

        $validated = $request->validated();

        $userFound = User::where('email', '=', $validated['email'])->first();

        if(!$userFound) {   
            $create = User::create($validated);
            return $create;
        }

        return back()->withErrors(['found' => 'E-mail já existente']);
    }

}
