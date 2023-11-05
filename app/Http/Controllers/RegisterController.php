<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class RegisterController extends Controller
{
   public function index()
   {
       return view('register.index', [
           "title" => "REGISTER",
           "active" => "register"
       ]);
   }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:254',
            'username' => ['required', 'min:5', 'max:254', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:254'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

//        $request->session()->flash('success', 'Registration success! Please login.');
        return redirect('/login')->with('success', 'Registration success! Please login.');
    }
}
