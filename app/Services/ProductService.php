<?php

namespace App\Services;

use App\Contracts\IProduct;

class ProductService implements IProduct
{
    
    public function all()
    {
        return 'all products';
    }

    public function show()
    {
        
    }
}