<?php

namespace App\Http\Controllers\admin\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        // grab credentials from the request
        $input_value = $request->only('email', 'password');
        $this->validate($request,
        [
            'email' => 'require|email',
            'password' => 'require|min:6'
        ],[
            'require' => ':attribute 为必填项',
            'email' => ':attribute 格式不正确',
            'min' => ':attribute 长度不符',
        ],[
            'email' => '邮箱',
            'password' => '密码'
        ]);

        try {
            // attempt to verify the input_value and create a token for the user
            if (! $token = JWTAuth::attempt($input_value)) {
                return response()->json(['error' => 'invalid_input_value'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }
}
