<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Isi data ke dalam tabel
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin123'), // Menggunakan bcrypt untuk hash password
        ]);

        // Tambahkan data lainnya jika diperlukan
    }
}
