<?php

namespace App\Http\Controllers;

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

}
