<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengguna')->insert([
            'user_id'       => 1,
            'nama'          => 'Admin',
            'username'      => 'admin',
            'password'      => 123,
            'photo'         => 'default.jpg',
            'email'         => 'admin@gmail.com',
            'no_telepon'    => '082298232938',
            'jenis_kelamin' => 1,
            'class'         => 1
        ]);

        // Massive Seeding
        for ($i = 2; $i <= 5; $i++) {
            DB::table('pengguna')->insert([
                'user_id'       => $i,
                'nama'          => 'Hina' . $i,
                'username'      => 'hina' . $i,
                'password'      => 123,
                'photo'         => 'default.jpg',
                'email'         => 'hina' . $i . '@gmail.com',
                'no_telepon'    => '082298232938',
                'jenis_kelamin' => rand(0, 1),
                'class'         => 2
            ]);
        }
    }
}
