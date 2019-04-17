<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\User;
use response;

class PassportController extends Controller
{
    /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
   
    public function register(Request $request)
    {
         //Get User types
        //  $usertypes = UserType::get()->pluck('type_name', 'id_user_type');
        //  return view('login', $usertypes);

        //  echo "<pre>";
        //  print_r($request->phone);exit;
        //  echo "<pre>";

    	$validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            //'phoneNo' => 'required',
            'idUserType' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['success'=>false, 'errors'=>$validator->errors()->all()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone,
            'id_user_type' => $request->idUserType,
            'password' => Hash::make($request->password),
        ]);

       
 
        $token = $user->createToken('TutsForWeb')->accessToken;
 
        return response()->json(['message'=>'Success','token' => $token], 200);
    }
 
    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('TutsForWeb')->accessToken;
            //var_dump($token);exit;
            return response()->json(['message'=>'Success','token' => $token], 200);
        } else {
            return response()->json(['message' => 'Invalid email or password'], 401);
        }
    }
 	
 	

    /**
     * Returns Authenticated User Details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }

    public function logout (Request $request) 
    {

	    $token = $request->user()->token();
	    $token->revoke();

	    $response = 'You have been succesfully logged out!';
	    return response()->json(['message' => 'You have been succesfully logged out!'], 401);

	}
}
