<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{

    public function customRegistration(Request $request){
        $request -> validate([
            'name'=> 'required',
            'prename'=> 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);
        $data =$request->all();
        $check = $this ->create($data);
        return redirect("/admin/employer")->withSuccess('you have signed in');
    }
    public function create(array $data){
        return User::create([
            'id'=> $data['id'],
            'name'=> $data['name'],
            'prename'=> $data['prename'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']) ,
        ]);
    }
    public function customLogin(Request $request){
        $request -> validate([

            'username' => 'required',
            'password' => 'required'
        ]);
        $credentials =$request->only('username','password');
        if(Auth::attempt($credentials)){
            $id=Auth::user()->id;
            $rol=DB::table('employers')->where('id',$id)->value('role');
            $statu=DB::table('employers')->where('id',$id)->value('statu');


            if ($rol === 'admin' || $rol === 'adminA' ||$rol === 'adminB' ||$rol === 'adminC' ||$rol === 'adminD'  ) {
                if ($statu ==='1') {
                    return redirect()->intended('/admin')->with([
                        "Success" => "you signed"
                    ]);
                }else{
                    return redirect()->intended('/login')->withErrors('User is inactive');
                }

            }
            if ($rol === 'employerN' && $statu ==='1') {
                if ($statu ==='1') {
                    return redirect()->intended('/')->with([
                        "success" => "you signed"
                    ]);
                }else{
                    return redirect()->intended('/login')->withErrors('User is inactive');
                }

            }

        }
        return redirect("login")->withErrors('email or password not valide');
    }
    public function accessHome(){
        if(Auth::check()){
            return view('admin.dashboard');
        }
        return redirect("login")->withErrors('you are not allowed to access');
    }
    public function profile(){
        $id=Auth::user()->id;
        $employer= Employer::find($id);

        return view('admin.auth.profile')->with(['employer'=>$employer]);
    }
    public function logout(){
        session()->flush();
        Auth::logout();

        return redirect('/');
    }
}
