<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriaMigration extends Migration
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
            'tamanho' => array(
                'type' => 'varchar',
                'constraint' => 100,
            ),
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('categorias');
    }

    public function down()
    {
        $this->forge->dropTable("categorias");
    }
}
