<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientController extends Controller
{

    public function show()
    {
        return view('patientSignup');
    }

    public function signupSubmit(Request $request)
    {

        $validateData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6|max:12',
                'passwordcongif'=>'required|'

            ]
            );
        $input = $request->all();
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordcongif = $request->input('passwordcongif');
        return "Full Name:".$name ;

    }


}
