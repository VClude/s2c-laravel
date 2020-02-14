<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register (Request $request) {

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
    
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
    
        $request['password']=Hash::make($request['password']);
        $user = User::create($request->toArray());
    
        $token = $user->createToken('TokenAuth')->accessToken;
        $response = ['token' => $token];
    
        return response($response, 200);
    
    }


    public function login (Request $request) {

        $user = User::where('username', $request->username)->orWhere('email', $request->username)->get();
    
        if ($user) {
            
            if (Auth::attempt(['email' => $request->username, 'password' => $request->password]) ||
                Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                $user = Auth::user();
                $token = $user->createToken('TokenAuth')->accessToken;
                $response = ['token' => $token, 'details' => $user];
                return response($response, 200);
            } else {
                $response = ['status' => 'password salah'];
                return response($response, 422);
            }
    
        } else {
            $response = ['status' => 'User ga ada'];
            return response($response, 422);
        }
    
    }


    public function logout (Request $request) {

        $token = $request->user()->token();
        $token->revoke();
    
        $response = ['status' => 'Success'];
        return response($response, 200);
    
    }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['status' => $user], 200); 
    }

    public function delete($id) 
    { 
        //need to add admin only middleware here 
        $user = User::Id($id);
        if($user){
            User::destroy($id);
            return response()->json(['deleted' => true, 'user' => $user], 200); 
        }

        return response()->json(['status' => 'User not Found'], 200); 
    } 
}
