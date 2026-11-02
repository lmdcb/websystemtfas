<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        // Insert 5 sample customers
        DB::table('customers')->insert([
            [
                'full_name'  => 'Maria Santos',
                'email'      => 'maria.santos@example.com',
                'phone'      => '09171234567',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'John Reyes',
                'email'      => 'john.reyes@example.com',
                'phone'      => '09181234567',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'Angela Cruz',
                'email'      => 'angela.cruz@example.com',
                'phone'      => '09191234567',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'Daniel Garcia',
                'email'      => 'daniel.garcia@example.com',
                'phone'      => '09201234567',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'Sofia Mendoza',
                'email'      => 'sofia.mendoza@example.com',
                'phone'      => '09211234567',
                'created_at' => now(),
            ],
        ]);

        // Insert 5 sample users
        DB::table('users')->insert([
            [
                'username'   => 'marias',
                'full_name'  => 'Maria Santos',
                'created_at' => now(),
            ],
            [
                'username'   => 'johnr',
                'full_name'  => 'John Reyes',
                'created_at' => now(),
            ],
            [
                'username'   => 'angelac',
                'full_name'  => 'Angela Cruz',
                'created_at' => now(),
            ],
            [
                'username'   => 'danielg',
                'full_name'  => 'Daniel Garcia',
                'created_at' => now(),
            ],
            [
                'username'   => 'sofiam',
                'full_name'  => 'Sofia Mendoza',
                'created_at' => now(),
            ],
        ]);
    }
}
