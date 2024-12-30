<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\PropertiSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FasilitasSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class]);
        $this->call([PropertiSeeder::class]);
        $this->call([FasilitasSeeder::class]);
    }
}
