<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //show register/create form
    public function create()
    {
        return view('singup');
    }
    //create new user
    public function store(Request $request)
    {
       $formFields = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required',
            'nickname' => ['required', 'min:3', 'max:255', Rule::unique('users', 'nickname')],
            'birthday' => ['required', 'date'],
            'gender' => 'required',
        ]);
        // dd($formFields);
        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);
        // dd($user);
        //login user
        Auth()->login($user);
    
        //redirect to home
        return redirect('/')->with('message', 'You have successfully registered');

    
    }
}
