<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signUp', [
            "title" => "Blog - Sign Up",
            "subHeader" => false,
            "thereIsFooter" => false,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
                "firstName" => "required|min:3",
                "lastName" => "required|min:3",
                "email" => "required|email",
                "password" => "required|min:6",
                "about" => "nullable"
            ]
        );

        dd('passou');

    }

}
