<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;


class Home extends BaseController
{
    protected $productModel, $categoryModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }
    public function index()
    {
        $data = [
            'title' => 'ARIIQ BAKERY',
            'newProduct' => $this->productModel->orderBy('id', 'desc')->first(),
            'categories' => $this->categoryModel->paginate(4)
        ];
        return view('home', $data);
    }
}
