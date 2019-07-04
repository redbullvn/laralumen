<?php

namespace App\Http\Controllers;

use App\Contracts\IUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $_user;
    private $_req;

    public function __construct(IUser $user, Request $request)
    {
        $this->_user = $user;
        $this->_req = $request;
    }

    public function create()
    {
        $userInfo = $this->_req->json()->all();
        $validator = Validator::make($userInfo, [
            'name' => 'required|integer',
            'email' => 'required|unique:users',
            'password' => 'required|min:15',
        ]);

        if ($validator->fails()) {
            return response()->json(getErrorValidatorForJsonResponse($validator), 422); // 422 UnProcessable Entity
        }

        # create users
        $user = $this->_user->create([
            'name' =>$userInfo['name'],
            'email' => $userInfo['email'],
            'password' => Hash::make($userInfo['password']),
            'api_token' => Str::random(60),
            'hide' => false,
        ]);

        if ($user) {
            // TODO: here
        }
    }
}
