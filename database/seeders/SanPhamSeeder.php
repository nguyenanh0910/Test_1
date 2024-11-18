<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 5 ; $i++) {
            DB::table('san_phams')->insert([
                'ma_san_pham' => "SP$i",
                'ten_san_pham' => "San Pham $i",
                'gia' => 15000,
                'gia_khuyen_mai' => 10000
            ]);
        }
    }
}
