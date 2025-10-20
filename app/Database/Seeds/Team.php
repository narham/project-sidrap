<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Team extends Seeder
{
    public function run()
    {
        // Data tim sepak bola
        $teams = [
            [
                'name' => 'Persija Jakarta',
                'julukan' => 'Macan Kemayoran',
                'tanggal_berdiri' => '1928-11-28',
                'negara' => 'Indonesia',
                'provinsi' => 'DKI Jakarta',    
                'kota' => 'Jakarta',
                'alamat' => 'Jl. Percetakan Negara No. 23, Jakarta Pusat',
                'stadion' => 'Stadion GBK',
                'logo' => 'persija_logo.png',
                'username' => 'persija',
                'password' => password_hash('persija123', PASSWORD_BCRYPT),
            ],
            [
                'name' => 'Arema FC',
                'julukan' => 'Singo Edan',
                'tanggal_berdiri' => '1987-08-11',
                'negara' => 'Indonesia',
                'provinsi' => 'Jawa Timur',
                'kota' => 'Malang',
                'alamat' => 'Jl. Gajayana No. 23, Malang',
                'stadion' => 'Stadion Kanjuruhan',
                'logo' => 'arema_logo.png',
                'username' => 'arema',
                'password' => password_hash('arema123', PASSWORD_BCRYPT),
            ],
            [
                'name' => 'Bali United',
                'julukan' => 'Serdadu Tridatu',
                'tanggal_berdiri' => '2015-01-10',
                'negara' => 'Indonesia',
                'provinsi' => 'Bali',
                'kota' => 'Denpasar',
                'alamat' => 'Jl. Diponegoro No. 99, Denpasar',
                'stadion' => 'Stadion Kapten I Wayan Dipta',
                'logo' => 'bali_united_logo.png',
                'username' => 'baliunited',
                'password' => password_hash('baliunited123', PASSWORD_BCRYPT),
            ],
            // Tambahkan data tim lainnya sesuai kebutuhan
        ];
        // Sisipkan data tim ke dalam tabel 'teams'
        foreach ($teams as $team) {
            $this->db->table('teams')->insert($team);
        }            
    }
}