<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
     public function login(Request $request)
    {
        $request -> validate([

            'username' => 'required',
            'password' => 'required|min:6'
        ]);
        $username= $request->input('username');
        $password= Hash::make($request->input('password')) ;
        $utilisateurs = Utilisateur::all();
        foreach ($utilisateurs  as $utilisateur ) {
            if ($username==$utilisateur['username'] && $password==$utilisateur['password']) {
                $request->session()->put('user',$utilisateur['username']);
                return redirect("/admin")->withSuccess('you have signed in');
            } else {
                return redirect("login")->withErrors('email or password not valide');
            }

        }
    }
    
}
