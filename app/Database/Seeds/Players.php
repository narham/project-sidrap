<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Players extends Seeder
{
    public function run()
    {
        //  Data pemain sepak bola
        for ($i = 0; $i < 1000; $i++) {
            $this->insertPlayerData();
        }
    }
    private function insertPlayerData()
    {
        // Using Faker to generate dummy data         
        $faker = \Faker\Factory::create();        
        $players = [
            [
                'team_sebelumnya_id' => $faker->numberBetween(1, 3),
                'team_id' => $faker->numberBetween(1, 3),
                'name' => $faker->name,
                'panggilan' => $faker->firstName,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = '2005-12-31'),
                'noid' => $faker->unique()->numerify('###############'),
                'jenis_id' => $faker->randomElement(['KTP', 'SIM', 'Passport']),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'negara_lahir' => $faker->country,
                'provinsi_lahir' => $faker->state,
                'kota_lahir' => $faker->city,
                'kewarganegaraan' => $faker->country,
                'kaki_utama' => $faker->randomElement(['Kanan', 'Kiri']),
                'tinggi_badan' => $faker->numberBetween(160, 190),
                'berat_badan' => $faker->numberBetween(50, 90),
                'alamat' => $faker->address,
                'provinsi' => $faker->state,
                'kota' => $faker->city,
                'email' => $faker->unique()->safeEmail,
                'no_telp' => $faker->phoneNumber,
                // 'photo' => $faker->image('public/uploads/players', 400, 400, null, false),
                'status_pendaftaran' => $faker->randomElement(['Diterima', 'Pending', 'Ditolak']),
                'status_pemain' => $faker->randomElement(['Aktif', 'Non-Aktif']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        // Insert all players data
        foreach ($players as $player) {
            $this->db->table('players')->insert($player);
        }
       
    }   

}