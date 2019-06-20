<?php

namespace App\Services;

use App\Contracts\IProduct;
use App\Product;
class ProductService implements IProduct
{
    private $_Product;

    public function __construct(Product $products)
    {
        $this->_Product = $products;
    }

    public function all()
    {
        return $this->_Product::paginate(5);
    }

    public function show($id)
    {
        return $this->_Product::find($id);
        // firstOrFail =>Exception | For API
        #return $this->_Product::findOrFail($id);
    }

    public function getByCategory($id)
    {
        //return Product::with('category')->get();
        ##return Product::where('category_id', '=', $id)->get(); // get table Product by cate
        
        #@case 1: EagerLoading __> load
        // step 1: get all product
            # $products = Product::all();
        // step 2:
            # if (isOke)
                # $cate_name = $products->load('category', 'name');    

        ## test case 1:
        // $pro = Product::where('category_id', '=', $id)->get();
        // if (false) {
        //     $pro->load('category');
        // }
        // return $pro;

        #@case 2: EagerLoading __> with
        // get all products & get info parent, ex: belongTo cate_name|cate
        return Product::with('category')->where('category_id', '=', $id)->get();
    }
}
