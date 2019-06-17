<?php

namespace App\Services;

use App\Contracts\IProduct;
use App\Product;
class ProductService implements IProduct
{
    
    public function all()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::find($id);
    }
}