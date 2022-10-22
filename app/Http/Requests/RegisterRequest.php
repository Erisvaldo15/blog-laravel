<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "firstName" => "required|min:3",
            "lastName" => "required|min:3",
            "email" => "required|email",
            "password" => "required|min:6",
            "about" => "nullable"
        ];
    }
}
