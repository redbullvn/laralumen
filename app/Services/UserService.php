<?php
/**
 * Created by PhpStorm.
 * User: nhat_thanh
 * Date: 7/4/2019
 * Time: 2:10 PM
 */

namespace App\Services;


use App\Contracts\IEloquentContractModel;
use App\Contracts\IUser;
use App\User;

class UserService implements IEloquentContractModel, IUser
{
    private $_User;

    public function __construct(User $user)
    {
        $this->_User = $user;
    }

    public function store($request)
    {
        // TODO: create
        //return $request;
        return $this->_User::create($request);
    }

    public function update($id)
    {
        // TODO: Implement edit() method.
    }

    public function destroy($id)
    {
        // TODO: Implement delete() method.
    }

    public function index()
    {
        return ['all Users'];
    }

    public function show($id)
    {

    }

    public function rulesCreate()
    {
        return $this->_User->rulesCreate();
    }
}