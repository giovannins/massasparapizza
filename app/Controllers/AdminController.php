<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index.php');
    }

    public function painel()
    {
        $produtosModel = new ProdutoModel();
        return view('admin/painel.php', ['produtos' => $produtosModel->findAll()]);
    }
}
