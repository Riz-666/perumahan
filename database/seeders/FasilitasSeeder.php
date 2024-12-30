<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use File;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fasilitas::truncate();

        $json = File::get("database/data/fasilitas_rumah.json");
        $fasilitas = json_decode($json);

        foreach ($fasilitas as $key => $value){
            Fasilitas::Create([
                "nama_fasilitas" => $value->nama_fasilitass
            ]);
        }
    }
}
