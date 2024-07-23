<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'level' => 'admin',
            'password' => Hash::make('xEYnws6y'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        // // Seed a teacher user
        // DB::table('users')->insert([
        //     'name' => 'Teacher',
        //     'email' => 'teacher@mail.com',
        //     'level' => 'guru',
        //     'password' => Hash::make('xEYnws6y'),
        //     'email_verified_at' => now(),
        //     'remember_token' => Str::random(10),
        // ]);

        // // Seed a student user
        // DB::table('users')->insert([
        //     'name' => 'Student',
        //     'email' => 'student@mail.com',
        //     'level' => 'siswa',
        //     'password' => Hash::make('xEYnws6y'),
        //     'email_verified_at' => now(),
        //     'remember_token' => Str::random(10),
        // ]);
    }
}
