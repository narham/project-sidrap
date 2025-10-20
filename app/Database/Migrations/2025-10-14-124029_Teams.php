<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Teams extends Migration
{
    public function up()
    {
        // Migration logic to create 'teams' table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'julukan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal_berdiri' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'negara' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'provinsi' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'kota' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'stadion' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'logo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'unique'     => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('teams');
    }

    public function down()
    {
        // Drop the 'teams' table if it exists
        $this->forge->dropTable('teams');
    }
}