<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ItensSeeder extends Seeder
{
    public function run()
    {
        $data = [
            1 => [
                'tamanho' => 1,
                'valor' => 50,
                'quantidade' => 100
            ],
            2 => [
                'tamanho' => 2,
                'valor' => 1.90,
                'quantidade' => 1
            ],
            3 => [
                'tamanho' => 3,
                'valor' => 2.40,
                'quantidade' => 1
            ],
            4 => [
                'tamanho' => 4,
                'valor' => 2.80,
                'quantidade' => 1
            ],
            5 => [
                'tamanho' => 5,
                'valor' => 4.50,
                'quantidade' => 1
            ],
            6 => [
                'tamanho' => 6,
                'valor' => 5.50,
                'quantidade' => 1
            ],
        ];
        foreach ($data as $value) {
            $this->db->table('itens')->insert($value);
        }
    }
}
