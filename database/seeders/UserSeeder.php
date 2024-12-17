<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'nama' => 'Admininstrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'hp' => '083894417833',
            'password' => bcrypt('admin123'),
        ]);
        DB::table('user')->insert([
            'nama' => 'User',
            'email' => 'user@gmail.com',
            'role' => '2',
            'hp' => '083894417833',
            'password' => bcrypt('user123'),
        ]);
    }
}
