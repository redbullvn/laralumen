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
        $userInfo = array_map('trim', $userInfo);
        $validator = Validator::make($userInfo, $this->_user->rulesCreate());

        if ($validator->fails()) {
            return response()->json(parseErrToJson($validator), 422); // 422 UnProcessable Entity
        }

        # create users
        $user = $this->_user->create([
            'name' =>$userInfo['name'],
            'email' => $userInfo['email'],
            'password' => Hash::make($userInfo['password']),
            'api_token' => Str::random(60),
            'hide' => 0,
        ]);

        if ( ! $user) {
            return response()->json(['error' => 'ERR: create fails'], 409);
        }

        return response()->json([$user], 201);
    }
}
