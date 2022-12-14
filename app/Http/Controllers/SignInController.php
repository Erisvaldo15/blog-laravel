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
            "thereIsHeader" => true,
            "thereIsFooter" => false,
            "isInAuthorPage" => false,
        ]);
        
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6', 
        ]);


        $logged = Auth::attempt($validated);

        if(!$logged) {
            return back()->withErrors([
                'not-found' => 'E-mail or password incorrect'
            ]);
        }

        $where = User::where('email', $request->email)->get();

        $request->session()->put('logged', $where->first()->email);
        
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