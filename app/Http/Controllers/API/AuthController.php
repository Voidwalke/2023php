<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function create(){
        //return view('auth.registr');
    }

    public function registr(Request $request){
        $request->validate([
            'name'=> 'required',
            'email' => 'required|email|unique:App\Models\User, email',
            'password' => 'required|min:6'
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>'reader',
        ]);
        $token = $user->createToken('MyAppTokens')->plainTextToken;
        $response = [
            'user' =>$user,
            'token' => $token,

        ];
         return response()->json($response, 201);
        


        // $form = [
        //     'name' => $request->name,
        //     'email' => request('email'),
        // ];

        // return response()->json($form);
    }

    public function login(){
        //return view('auth.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (!Auth::attempt($credentials, $request->remember)){

            return response('Bad login', 401);

        }

        $user = User::where('email', request('email')) -> first();
        $token = $user->createToken('MyAppTokens')->plainTextToken;
        $response = [
            'user' =>$user,
            'token' => $token,

        ];
         return response()->json($response, 201);



        return response()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(){
    
        auth()->user()->tokens()->delete();
         return response(['Message'=>'Log out'], 201);

        
   
        
    }
}