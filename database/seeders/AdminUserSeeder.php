<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'SuperAdmin',
            'username' => 'admin',
            'role' => 'admin',
            'tanggal' => now(),
            'telephone' => '213123',
            'age' => 30,
            'job' => 'System Administrator',
            'education' => 'S1 Informatika',
            'address' => 'Jl. Merdeka No. 123, Surabaya',
            'blood_type' => 'O+',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // ganti dengan password yang aman
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
