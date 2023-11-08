<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LogSignController extends Controller
{
    public function register(Request $request){
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['city']=$request->city;
        $data['password'] = Hash::make($request->password);

        User::create($data);
        return redirect()->route('login');
    }

    public function logCheck(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){

            if(Auth::user()->type==0){
                return redirect()->route('home');
            }
            elseif(Auth::user()->type==1){
                return redirect()->route('admin');
            }
            return redirect() -> route('login');
        };
    }

    public function userLogout(){
        Auth::logout();
        return redirect() -> route('home');
    }
}
