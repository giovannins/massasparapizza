<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ItemMigration extends Migration
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
            'tamanho' => [
                'type' => 'int',
                'constraint' => 8,
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
        $this->forge->createTable('itens');
    }

    public function down()
    {
        $this->forge->dropTable("itens");
    }
}
