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

    public function category($id)
    {
        $data = [
            'title' => 'ARIIQ BAKERY',
            'category' => $this->categoryModel->products(strtolower($id))
        ];
        return view('products', $data);
    }
    public function product($slug)
    {
        $data = [
            'title' => 'ARIIQ BAKERY',
            'product' => $this->productModel->where('slug', $slug)->first()
        ];
        // return var_dump($data['category']->first());
        return view('product', $data);
    }
}
