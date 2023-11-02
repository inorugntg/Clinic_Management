<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; // Tambahkan ini

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Isi dengan data user sesuai kebutuhan Anda
        $data = [
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user4321'),
                'usertype' => 0,
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin4321'),
                'usertype' => 1,
            ],
            [
                'name' => 'dokter1',
                'email' => 'dokter1@gmail.com',
                'password' => bcrypt('12345678'),
                'usertype' => 2,
            ],
            // Tambahkan data user atau admin lainnya jika diperlukan
        ];

        // Masukkan data user ke dalam tabel User
        DB::table('users')->insert($data);
    }
}