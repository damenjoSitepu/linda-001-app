<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 2;
        for ($i = 1; $i <= 4; $i++) {
            DB::table('pesan')->insert([
                'pesan_id'  => $i,
                'user_id'   => $count++,
                'status'    => 0
            ]);
        }
    }
}
