<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PLayers extends Migration
{
    public function up()
    {
        // Membuat tabel 'players'
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'team_sebelumnya_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'team_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'panggilan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'noid' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'jenis_id' => [
                'type'       => 'ENUM',
                'constraint' => ['NIK', 'SIM', 'PASSPORT'],
                'default'    => 'NIK',               
            ],
            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['Laki-laki', 'Perempuan'],
                'default'    => 'Laki-laki',
            ],
            'negara_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'provinsi_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'kota_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'kewarganegaraan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'kaki_utama' => [
                'type'       => 'ENUM',
                'constraint' => ['Kanan', 'Kiri'],
                'default'    => 'Kanan',
            ],
            'tinggi_badan' => [
                'type'       => 'INT',
                'constraint' => 3,
                'null'       => true,
            ],
            'berat_badan' => [
                'type'       => 'INT',
                'constraint' => 3,
                'null'       => true,
            ],
            'alamat' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'provinsi' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'kota' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'no_telp' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
           'Kartu_keluarga' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'Akta_kelahiran' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'Ijazah_terakhir' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'ktp' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'sim' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'passport' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'status_pendaftaran' => [
                'type'       => 'ENUM',
                'constraint' => ['Pending', 'Diterima', 'Ditolak'],
                'default'    => 'Pending',
            ],
            'status_pemain' => [
                'type'       => 'ENUM',
                'constraint' => ['Aktif', 'Non-aktif'],
                'default'    => 'Non-aktif',
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
        $this->forge->addForeignKey('team_id', 'teams', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('players');
        
        }

    public function down()
    {
        // Drop tabel 'players' jika rollback
        $this->forge->dropTable('players');
    }
}