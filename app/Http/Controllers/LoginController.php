<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;

class LoginController extends Controller
{
   
    public function login(Request $request){
        

        if(Auth::attempt([
            'email' => $request->email,
            'password'=> $request->password
        ]))

        {
            $user = User::where('email', $request->email)->first();
            if ($user->is_admin())
            {

                return redirect()->route('clubs.index');
            }
            
            return redirect()->route('club');

        }

        return redirect()->back();

    }
}
