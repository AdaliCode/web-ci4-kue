<?php

namespace App\Controllers;

use App\Models\ProductModel;


class Home extends BaseController
{
    protected $productmodel;
    public function __construct()
    {
        $this->productmodel = new ProductModel();
    }
    public function index()
    {
        // return var_dump($this->productmodel->orderBy('id', 'desc')->first());
        $data = [
            'title' => 'ARIIQ BAKERY',
            'newProduct' => $this->productmodel->orderBy('id', 'desc')->first()
        ];
        return view('home', $data);
    }
}
