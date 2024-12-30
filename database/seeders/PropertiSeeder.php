<?php

namespace Database\Seeders;

use App\Models\Properti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class PropertiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properti')->insert([
            'nomor_rumah' => 'B10',
            'tipe_rumah' => 'classic',
            'luas_bangunan' => '40',
            'luas_tanah' => '70',
            'harga' => '900000000',
            'fasilitas' => 'Kolanm Renang VVIP',
            'keterangan_rumah' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'status' => 'Tersedia',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('properti')->insert([
            'nomor_rumah' => 'B30',
            'tipe_rumah' => 'Modern',
            'luas_bangunan' => '50',
            'luas_tanah' => '80',
            'harga' => '1000000000',
            'fasilitas' => 'kamar tidur',
            'keterangan_rumah' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'status' => 'Tersedia',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('properti')->insert([
            'nomor_rumah' => 'B20',
            'tipe_rumah' => 'Elegant',
            'luas_bangunan' => '55',
            'luas_tanah' => '80',
            'harga' => '7000000000',
            'fasilitas' => 'kamar mandi',
            'keterangan_rumah' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'status' => 'Tersedia',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
