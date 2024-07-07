<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{
    public $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $products = $this->product->getProduct();
        return $this->render("product.list", compact("products"));
    }
}