<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller
{

    //private $productsObj;

    public function __construct($app)
    {
        parent::__construct($app);
        
        $productsObj = new Products($this->app->path('/database/products.json'));
    }
    public function index()
    {
        $productsObj = new Products($this->app->path('/database/products.json'));
        $products = $productsObj->getAll();

        return $this->app->view('products/index', ['products' => $products]);
    }

    public function show()
    {
        $sku = $this->app->param('sku');

        $productsObj = new Products($this->app->path('/database/products.json'));

        $product = $productsObj->getBySku($sku);

        if (is_null($product)) {
            return $this->app->view('products/missing');
        }
        
        return $this->app->view('products/show', ['product' => $product]);
    }
}