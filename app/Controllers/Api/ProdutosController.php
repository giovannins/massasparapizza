<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class ProdutosController extends BaseController
{
    public function store()
    {
        $session = session();
        if (!$session->get('is_login')) {
            return $this->response->setStatusCode(403);
        }
        $produtoModel = new ProdutoModel();
        if ($this->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'img' => 'required',
            'tamanho' => 'required',
            'valor' => 'required',
            'quantidade' => 'required',
        ])) {
            $produtoModel->insert([ 
                'titulo' => $this->request->getPost('titulo'),
                'descricao' => $this->request->getPost('descricao'),
                'img' => $this->request->getPost('img'),
                'tamanho' => $this->request->getPost('tamanho'),
                'valor' => $this->request->getPost('valor'),
                'quantidade' => intval($this->request->getPost('quantidade')),
            ]);
            return redirect()->to('/admin/painel');
        }
        return $this->response->setStatusCode(400);
    }

    public function update($id)
    {
        $session = session();
        if (!$session->get('is_login')) {
            return $this->response->setStatusCode(403);
        }
        $produtoModel = new ProdutoModel();
        if ($this->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'img' => 'required',
            'tamanho' => 'required',
            'valor' => 'required',
            'quantidade' => 'required',
        ])) {
            $produtoModel->update($id, [ 
                'titulo' => $this->request->getPost('titulo'),
                'descricao' => $this->request->getPost('descricao'),
                'img' => $this->request->getPost('img'),
                'tamanho' => $this->request->getPost('tamanho'),
                'valor' => $this->request->getPost('valor'),
                'quantidade' => intval($this->request->getPost('quantidade')),
            ]);
            return redirect()->to('/admin/painel');
        }
        return $this->response->setStatusCode(400);
    }

    public function delete($id)
    {
        $session = session();
        if (!$session->get('is_login')) {
            return $this->response->setStatusCode(403);
        }
        $produtosModel = new ProdutoModel();
        if ($produtosModel->find($id)) {
            $produtosModel->delete($id);
            return $this->response->setStatusCode(200);
        }
        return $this->response->setStatusCode(500);
    }
}
