<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IProduct;

class ProductController extends Controller
{
    private $_products;
    private $_req;

    public function __construct(IProduct $products, Request $request)
    {
        $this->_products = $products;
        $this->_req = $request;
    }

    public function index()
    {
        $_products = $this->_products->all();
        if ($_products->isEmpty()) {
            return response()->json(['error'=> 'not found data'], 404, []);
        }
        return response()->json($_products, 200);
    }

    public function show($id)
    {
        if ( ! $exist_product = $this->_products->show($id)) {
            return response()->json(['error'=> 'not found data'], 404, []);
        }

        return response()->json([$exist_product], 200);
    }

    public function getByCategory($cate_id)
    {
        return $this->_products->getByCategory($cate_id);
    }

    public function create()
    {
        $request = $this->_req->json()->all();
        $new = $this->_products->create($request);

        return response()->json([$new], 201);
    }
}
