<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index(User $author) {
        return view('author', [
            "title" => "Blog - Author",
            "thereIsHeader" => false,
            "thereIsFooter" => false,
            "author" => $author,
            "isInAuthorPage" => true,
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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }
    
}
