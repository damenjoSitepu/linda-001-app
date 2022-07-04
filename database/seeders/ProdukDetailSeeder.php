<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Merk',
            'value'         => 'National Ion'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Daya Keluaran',
            'value'         => '125 W'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Daya',
            'value'         => '220 V - 50 hz'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'RPM',
            'value'         => '2850 / IPX4'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Daya Hisap Max',
            'value'         => '9 m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Tinggi Dorong',
            'value'         => '14 m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Tinggi Total Max',
            'value'         => '23 m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Kapasitas Max',
            'value'         => '30 liter / Menit'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Pipa',
            'value'         => '1 Inch x 1 Inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 1,
            'spesifikasi'   => 'Suhu Cairan Max',
            'value'         => '35 C'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 2,
            'spesifikasi'   => 'Berat',
            'value'         => '4.300 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 2,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 2,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Semua Etalase'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 2,
            'spesifikasi'   => 'Merk',
            'value'         => 'MC Pump'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 2,
            'spesifikasi'   => 'Power',
            'value'         => '100watt 220 Volt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 2,
            'spesifikasi'   => 'Head Max ',
            'value'         => '5 Meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 2,
            'spesifikasi'   => 'Kapasitas',
            'value'         => '3600 Liter/Jam'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'Berat ',
            'value'         => '7 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Hardware'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'Daya',
            'value'         => '125 Watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'Hisap Sumur ',
            'value'         => '9 Meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'Hisap Datar',
            'value'         => '15 Meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'Dorong',
            'value'         => '2-3 Lantai'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'In Put ',
            'value'         => 'Pipa Inchi'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 3,
            'spesifikasi'   => 'Out Put ',
            'value'         => 'Pipa 1 Inchi'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Berat ',
            'value'         => '21.000 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Pompa Air Shimizu'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Katalog',
            'value'         => 'Shimizu PC-268 Bit'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Daya Listrik ',
            'value'         => '250 Watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Daya Hisap ',
            'value'         => '30 meter (optimal 15 meter)'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Daya Dorong ',
            'value'         => '30 meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Total head ',
            'value'         => '60 meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Kapasitas Maks ',
            'value'         => '75 liter/menit'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 4,
            'spesifikasi'   => 'Fitur ',
            'value'         => 'Thermal Protector'
        ]);


        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Berat',
            'value'         => '15.000 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Etalase',
            'value'         => 'DABinter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Daya output listrik ',
            'value'         => '625 watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Daya isap',
            'value'         => '30 meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Daya dorong ',
            'value'         => '30 meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Total head ',
            'value'         => '60 meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Debit',
            'value'         => '50 meter permenit'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Pipa inlet ',
            'value'         => '11/4'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 5,
            'spesifikasi'   => 'Pipa outlet ',
            'value'         => '1'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Merk ',
            'value'         => 'DABINTER'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Type ',
            'value'         => 'JET 252'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Daya Hisap ',
            'value'         => '11 Meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Daya Dorong ',
            'value'         => '35 Meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Tinggi Total Maks ',
            'value'         => '46 Meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Kapasitas',
            'value'         => '50 Liter/Menit'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Kapasitor ',
            'value'         => '12uf /450V'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Suhu Cairan Maks ',
            'value'         => '35°C'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Tegangan',
            'value'         => '220V / Frek : 50Hz'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Daya Masukan ',
            'value'         => '625 Watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'RPM ',
            'value'         => '2850'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 6,
            'spesifikasi'   => 'Ukuran Pipa ',
            'value'         => '1 Inch x 1 Inch'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Berat',
            'value'         => '7 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Hardware'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Katalog',
            'value'         => 'Sanyo PWH137C'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Pompa',
            'value'         => 'Sanyo PWH137C (Tidak Otomatis)'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Daya ',
            'value'         => '125watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Hisap sumur ',
            'value'         => '9 meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Hisap Datar ',
            'value'         => 'Hisap Datar '
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Dorong',
            'value'         => '2-3 Lantai'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'In Put',
            'value'         => 'Pipa 1 inchi'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'out Put ',
            'value'         => 'Pipa 1 inchi'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 7,
            'spesifikasi'   => 'Garansi Resmi Sanyo ',
            'value'         => '3 Tahun'
        ]);


        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Berat',
            'value'         => '1.850 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Otomatis Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Rated voltage ',
            'value'         => '220VAC'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Frequency ',
            'value'         => '50hz/60hz'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Max current ',
            'value'         => '10A'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Starting Pressure ',
            'value'         => '1.5 bar'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Adjustable starting pressure ',
            'value'         => '1.0 -2.5 bar'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Maximum working pressure ',
            'value'         => '10 bar '
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Maximum temperature ',
            'value'         => '60 derajat Celcius'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Drat in dan out ',
            'value'         => '1 inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 8,
            'spesifikasi'   => 'Protection grade ',
            'value'         => 'Ip68'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Berat',
            'value'         => '18.000 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Etalase',
            'value'         => 'ELEKTRONIK'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Jenis Pompa',
            'value'         => 'Pompa Air Listrik/Pompa Jet Pump'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Galian Sumur ',
            'value'         => '30 Meter.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Merk',
            'value'         => 'DP-255A DABALTO.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Tegangan ',
            'value'         => '220Volt/50Hz.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Daya Keluar ',
            'value'         => '250 Watt.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Daya Masuk ',
            'value'         => '750 Watt.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Tinggi Hisap ',
            'value'         => '28 Mtr.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Tinggi Dorong ',
            'value'         => '28 Mtr.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Tinggi Total Maks ',
            'value'         => '56 Mtr.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Kapasitas Maks ',
            'value'         => '31 Ltr/Min.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Pipa Hisap ',
            'value'         => '1" x 1".'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Kapasitor',
            'value'         => '16 uF/450 Volt.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Suhu Cairan Maks ',
            'value'         => '35° Celcius'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Berat Bersih Pompa ',
            'value'         => '16 Kg.'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 9,
            'spesifikasi'   => 'Otomatis ',
            'value'         => 'YA.'
        ]);


        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Berat',
            'value'         => '15 Kilogram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Semua Etalase'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'voltase ',
            'value'         => '220 V'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Power ',
            'value'         => '0.5 Hp / 0.37 kw / 370 watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Rotasi putaran ',
            'value'         => '2850 r/m
            Total head : 44 m (Penyimpanan dari mesin ke penampungan/toren)'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Kapasitas ',
            'value'         => '4 m/jam (semakin dekat jarak pompa ke penampungan semakin besar debit air)'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Outlet ',
            'value'         => '1 inc'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Otomatis ',
            'value'         => 'no'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Casing ',
            'value'         => '3 inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Diameter mesin ',
            'value'         => '2 inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 10,
            'spesifikasi'   => 'Jumlah Kipas',
            'value'         => '11 Kipas NORIL'
        ]);


        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Berat',
            'value'         => '16.000 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'voltase ',
            'value'         => '220 V'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Power ',
            'value'         => '0.5 Hp / 0.37 kw / 370 watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Rotasi putaran ',
            'value'         => '2850 r/m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Total head ',
            'value'         => '44 m (Penyimpanan dari mesin ke penampungan/toren)'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Kapasitas',
            'value'         => '4 m/jam (semakin dekat jarak pompa ke penampungan semakin besar).'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Outlet ',
            'value'         => '1 inc'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Otomatis ',
            'value'         => 'no'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Casing ',
            'value'         => '3 inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Diameter mesin ',
            'value'         => '2 inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 11,
            'spesifikasi'   => 'Jumlah Kipas',
            'value'         => '11 Kipas NORIL'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Berat',
            'value'         => '18.000 Gram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Pompa Submersibel DABMAX DABMAX 3SDM3/16'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'voltase ',
            'value'         => '220 V'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Power ',
            'value'         => '0.75 Hp / 0.55 kw / 550 watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Rotasi putaran ',
            'value'         => '2850 r/m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Total head ',
            'value'         => '60 m (Penyimpanan dari mesin ke penampungan/toren)'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Kapasitas ',
            'value'         => '4 m/jam (semakin dekat jarak pompa ke penampungan semakin besar debit air)'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Outlet ',
            'value'         => '1 inc'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Otomatis ',
            'value'         => 'no'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Casing ',
            'value'         => '3 inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Body mesin ',
            'value'         => '2 Inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 12,
            'spesifikasi'   => 'Jumlah Kipas',
            'value'         => '16 Kipas NORIL'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Berat',
            'value'         => '16 Kilogram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Jelas Murah DABMAX 3SJM3/16'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'voltase ',
            'value'         => '220 V'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Power ',
            'value'         => '0.75 Hp / 0.55 kw / 550 watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Rotasi putaran ',
            'value'         => '2850 r/m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Total head ',
            'value'         => '60 m '
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Kapasitas ',
            'value'         => '4 m/jam - Outlet : 1 inc'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Otomatis ',
            'value'         => 'no'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Casing ',
            'value'         => '3 inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Kipas ',
            'value'         => 'NORIL'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Alat 1',
            'value'         => 'Control box'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Alat 2',
            'value'         => 'Alat Resin Bakar'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Alat 3',
            'value'         => 'Isolasi Karet'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Alat 4',
            'value'         => 'Isolasi Listrik'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 13,
            'spesifikasi'   => 'Alat 5',
            'value'         => 'Kabel hitam serabut 50 m'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Model',
            'value'         => '3SDM1.8/27+kabel 50m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Power',
            'value'         => '1HP/750watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Max Flow',
            'value'         => '2.8 m3/h'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Max Head',
            'value'         => '104 meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Rated Head',
            'value'         => '74m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Rated Flow ',
            'value'         => '1.8m3/h'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Arus',
            'value'         => '0 - 8L/MIN - 17L/MIN - 25L/MIN - 33L/MIN - 41L/MIN'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Dorong',
            'value'         => '104m - 99m - 93m - 81m - 68m -38m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Ukuran Casing&Pipa Outlet',
            'value'         => '3inch&1.25inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Kapasitansi Pakai ',
            'value'         => 'Control box'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Kabel biru ',
            'value'         => '50meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Impeller',
            'value'         => '27bh Plastik'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Weight',
            'value'         => '22kg'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Kipas ',
            'value'         => 'Plastik'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 14,
            'spesifikasi'   => 'Casing ',
            'value'         => 'Stainless'
        ]);



        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Berat',
            'value'         => '13 Kilogram'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Kategori',
            'value'         => 'Pompa Air'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Etalase',
            'value'         => 'Semua Etalase'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Model',
            'value'         => '3SDM3/21+kabel 55m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Power',
            'value'         => '1HP/750watt'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Max Flow',
            'value'         => '4.5 m3/h'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Max Head',
            'value'         => '84meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Rated Head',
            'value'         => '60 m'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Rated Flow ',
            'value'         => '3m3/h'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Ukuran Casing&Outlet',
            'value'         => '3inch&1.25inch'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Kapasitansi',
            'value'         => 'Pakai Control box'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Kabel biru ',
            'value'         => '55 meter'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Impeller',
            'value'         => '21bh Plastik'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Weight',
            'value'         => '23kg'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Kipas ',
            'value'         => 'Plastik'
        ]);

        DB::table('produk_detail')->insert([
            'produk_id'     => 15,
            'spesifikasi'   => 'Casing ',
            'value'         => 'Stainles'
        ]);
    }
}
