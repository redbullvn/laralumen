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
    public function index(); // get all
    public function store($request); // create
    public function update($request);
    public function show($id); // get detail
    public function destroy($id);
}