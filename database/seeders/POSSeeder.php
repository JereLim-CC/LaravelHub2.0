<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POSSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'John Smith',
                'email' => 'john@example.com',
                'phone' => '09171234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'James Wilson',
                'email' => 'james@example.com',
                'phone' => '09191234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Anna Cruz',
                'email' => 'anna@example.com',
                'phone' => '09201234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'David Reyes',
                'email' => 'david@example.com',
                'phone' => '09211234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'jsmith',
                'full_name' => 'John Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'msantos',
                'full_name' => 'Maria Santos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'jwilson',
                'full_name' => 'James Wilson',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'acruz',
                'full_name' => 'Anna Cruz',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'dreyes',
                'full_name' => 'David Reyes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}