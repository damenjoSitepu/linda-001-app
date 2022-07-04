<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            'nama_produk'   => 'Pompa National Ion',
            'kondisi'       => 'Baru',
            'harga'         => 150000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Pompa Celup Q2006',
            'kondisi'       => 'Baru',
            'harga'         => 275000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Pompa Air PWH137C',
            'kondisi'       => 'Baru',
            'harga'         => 350000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Pompa Air Jet JPM-268',
            'kondisi'       => 'Baru',
            'harga'         => 350000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Pompa Air Jet Pump DP 260',
            'kondisi'       => 'Baru',
            'harga'         => 355000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Pompa Air Semi Jet JSM-252',
            'kondisi'       => 'Baru',
            'harga'         => 125000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Pompa Air PWH137C Extra Strong',
            'kondisi'       => 'Baru',
            'harga'         => 500000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'APC Maxi,o Plus',
            'kondisi'       => 'Baru',
            'harga'         => 250000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Pompa Jetpump DP-255A',
            'kondisi'       => 'Baru',
            'harga'         => 275000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Dabmax 0.5 HP Kabel',
            'kondisi'       => 'Baru',
            'harga'         => 140000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Dabmax 0.5 HP Non Kabel',
            'kondisi'       => 'Baru',
            'harga'         => 140000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Dabmax 0.75 HP Kabel',
            'kondisi'       => 'Baru',
            'harga'         => 225000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Dabmax 0.75 HP Non Kabel',
            'kondisi'       => 'Baru',
            'harga'         => 380000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Dabmax 1 HP Kabel',
            'kondisi'       => 'Baru',
            'harga'         => 120000,
            'photo'         => 'default.jpg'
        ]);

        DB::table('produk')->insert([
            'nama_produk'   => 'Dabmax 1 HP Kabel',
            'kondisi'       => 'Baru',
            'harga'         => 150000,
            'photo'         => 'default.jpg'
        ]);
    }
}
