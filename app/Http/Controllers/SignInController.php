<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{

    public function index() {

        // dd(session('logged'));

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
            return back()->with('error', 'Ocorreu um erro ao fazer o login.');
        }

        $where = User::where('email', $request->email)->get();

        $request->session()->put('logged', $where->first()->firstName);
        
        return redirect()->route('profile.index');
    }

    public function create() {
    }

    public function destroy(Request $request) {  

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('logout', 'Logout realized with success');
    }

}