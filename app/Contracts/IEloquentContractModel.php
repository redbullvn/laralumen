<?php
/**
 * Created by PhpStorm.
 * User: nhat_thanh
 * Date: 6/20/2019
 * Time: 4:53 PM
 */

namespace App\Contracts;


interface IEloquentContractModel
{
    public function create($request);
    public function edit($id);
    public function delete($id);
}