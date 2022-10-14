<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    
    public function index() {
        return view('signIn', [
            "title" => "Blog - login",
            "subHeader" => false,
            "thereIsFooter" => false,
        ]);
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6', 
        ]);


        $logged = Auth::attempt($validated);

        if(!$logged) {
            return back()->with('Error', 'Ocorreu um erro ao fazer o login.');
        }

        $where = User::where('email', $request->email)->get();
        $request->session()->put('logged', $where->first()->full_name);
        return redirect()->route('profile.index');
    }

    public function create() {
    }

    public function destroy() {  
        Auth::logout();
        return redirect('/login')->with('logout', 'Logout realized with success');
    }

}