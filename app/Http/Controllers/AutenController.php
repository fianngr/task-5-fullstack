<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AutenController extends Controller
{   
    public function index(){
        return view('login',[
            "title"=>'alfian'
        ]);

    }
    public function registrasi(){
        return view('register',[
            "title"=>'alfian'
        ]);

    }
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }


    public function register(){
        $validator = Validator::make(request()->all(), [
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required',
            'username'=>'required'
		]);

		if ($validator->fails()) {
			return response()->json(['error'=>$validator->errors()], 401);            
		}

        $user = User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>Hash::make(request('password')),
            'username'=>request('username')
        ]);

        if($user){
            return response()->json(['message' => 'Pendaftaran Berhasil']);
        } else{
            return response()->json(['success'=>'Pendaftaran Gagal']);
        }
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
