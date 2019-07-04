<?php

namespace App\Http\Controllers;

use App\Contracts\IUser;
use Illuminate\Http\Request;

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
        //return $this->_req;
        return $this->_user->create($this->_req);
    }
}
