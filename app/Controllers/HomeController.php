<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home/index');
    }

    public function sobre()
    {
        return view('home/sobre');
    }

    public function produtos()
    {
        $produtosModel = new ProdutoModel();
        return view('home/produtos', ['produtos' => $produtosModel->findAll()]);
    }
}
