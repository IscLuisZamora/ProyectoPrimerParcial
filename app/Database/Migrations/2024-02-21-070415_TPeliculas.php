<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TPeliculas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelicula' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pelicula_pelicula' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'imagenRuta_pelicula' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'activo_pelicula' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => false,
            ],
        ]);
        $this->forge->addKey('id_pelicula', true);
        $this->forge->createTable('tbl_pelicula');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_pelicula');
    }
}
