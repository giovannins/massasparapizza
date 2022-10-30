<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriaMigration extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable("categorias");
    }
}
