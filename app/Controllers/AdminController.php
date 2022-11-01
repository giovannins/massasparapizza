<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use CodeIgniter\Config\Services as ConfigServices;
use CodeIgniter\Session\Session;
use Config\Services;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index.php');
    }

    public function painel()
    {
        $session = session();
        if (!$session->get('is_login')) {
            return redirect()->to('/');
        }
        $produtosModel = new ProdutoModel();
        return view('admin/painel.php', ['produtos' => $produtosModel->findAll()]);
    }

    public function editar($id)
    {
        $session = session();
        if (!$session->get('is_login')) {
            return redirect()->to('/');
        }
        $produtosModel = new ProdutoModel();
        return view('admin/editar.php', ['produtos' => $produtosModel->find($id)]);
    }

    public function criar()
    {
        $session = session();
        if (!$session->get('is_login')) {
            return redirect()->to('/');
        }
        return view('admin/criar.php');
    }

    public function login()
    {
        if (!$this->validate(['adminPass' => 'required'])) {
            return redirect()->to('/');
        }
        if ($this->request->getPost('adminPass') != env('admin.pass')) {
            return redirect()->to('/');
        }
        $session = session();
        $session->set('is_login', true);
        return redirect()->to('/admin/painel');
    }
}
