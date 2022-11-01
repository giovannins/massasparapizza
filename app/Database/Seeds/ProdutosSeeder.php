<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            1 => [
                'titulo' => 'Massa coquitel (6cm)',
                'descricao' => 'Cento de massas coquitel',
                'img' => '/imgs/massa14cm.jpg',
                'tamanho' => '6cm - coquitel',
                'valor' => '50',
                'quantidade' => 100,
            ],
            2 => [
                'titulo' => 'Massa de pizza brotinho',
                'descricao' => 'Massa brotinho 14cm',
                'img' => '/imgs/massa14cm.jpg',
                'tamanho' => '14cm',
                'valor' => '1.90',
                'quantidade' => 1,
            ],
        ];
        foreach ($data as $value) {
            $this->db->table('produtos')->insert($value);
        }
    }
}
