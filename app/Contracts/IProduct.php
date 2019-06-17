<?php

namespace App\Contracts;

interface IProduct {
    public function all();
    public function show($id);
}