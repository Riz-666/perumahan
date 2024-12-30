<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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
            'no_ktp' => '12345567890122',
            'alamat' => 'Jl. apa aja, rt666/999',
            'jenis_kelamin' => 'Laki-Laki',
            'role' => '1',
            'hp' => '083894417833',
            'password' => bcrypt('admin123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('user')->insert([
            'nama' => 'Antonio',
            'email' => 'anton@gmail.com',
            'no_ktp' => '125567890122',
            'alamat' => 'Jl. asalan, rt66/99',
            'jenis_kelamin' => 'Laki-Laki',
            'role' => '2',
            'hp' => '083894416663',
            'password' => bcrypt('anton123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('user')->insert([
            'nama' => 'User',
            'email' => 'user@gmail.com',
            'no_ktp' => '1234768600090122',
            'alamat' => 'Jl.intisari, rt666/999',
            'jenis_kelamin' => 'Perempuan',
            'role' => '2',
            'hp' => '083894417833',
            'password' => bcrypt('user123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
