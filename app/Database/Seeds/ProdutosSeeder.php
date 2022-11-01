<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            1 => ['tamanho' => '6cm - coquitel'],
            2 => ['tamanho' => '14cm - brotinho'],
            3 => ['tamanho' => '20cm - individual'],
            4 => ['tamanho' => '25cm - mini-pizza'],
            5 => ['tamanho' => '30cm - 6 pedaços'],
            6 => ['tamanho' => '35cm - tradicional'],
        ];
        foreach ($data as $value) {
            $this->db->table('produtos')->insert($value);
        }
    }
}
