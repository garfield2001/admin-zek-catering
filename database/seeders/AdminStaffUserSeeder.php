<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminStaffUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_staff_users')->insert([
            'first_name' => 'Alexander',
            'last_name' => 'Jones',
            'email' => 'alexander445@gmail.com',
            'phone_number' => '09913942391',
            'username' => 'admin',
            'password' => Hash::make('12345'),
            'role' => 'Administrator',
            'image' => 'alexander-jones.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
