<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdutoMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 8,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'descricao' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'img' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'tamanho' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'valor' => [
                'type' => 'float',
                'constraint' => 8,
            ],
            'quantidade' => [
                'type' => 'int',
                'constraint' => 8,
            ],
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
