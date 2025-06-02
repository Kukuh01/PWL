<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    protected $product;

    function __construct()
    {
        $this->product = new ProdukModel();
    }


    public function index(): string
    {
        helper(['form','number']);
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_home', $data);
    }

    public function faq(): string
    {
        return view('v_faq');
    }
}
