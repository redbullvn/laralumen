<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IProduct;

class ProductController extends Controller
{
    private $_products;

    public function __construct(IProduct $products)
    {
        $this->_products = $products;
    }

    public function index()
    {
        return $this->_products->all();// return all products
    }

    public function show($id)
    {
        return $this->_products->show($id);
    }
}
