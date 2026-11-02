<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        // Sample Customers
        $customers = [
            ['full_name' => 'cs1', 'email' => 'cs1@example.com', 'phone' => '09171234567'],
            ['full_name' => 'cs2', 'email' => 'cs2@example.com', 'phone' => '09182345678'],
            ['full_name' => 'cs3', 'email' => 'cs3@example.com', 'phone' => '09193456789'],
            ['full_name' => 'cs4', 'email' => 'cs4@example.com', 'phone' => '09204567890'],
            ['full_name' => 'cs5', 'email' => 'cs5@example.com', 'phone' => '09215678901'],
        ];

        foreach ($customers as $customer) {
            DB::table('customers')->updateOrInsert(
                ['email' => $customer['email']],
                [
                    'full_name' => $customer['full_name'],
                    'phone' => $customer['phone'],
                    'created_at' => now(),
                ]
            );
        }

        // Sample Users
        $users = [
            ['username' => 'usr1', 'full_name' => 'User 1', 'email' => 'us1@example.com', 'role' => 'Admin', 'status' => 'Active'],
            ['username' => 'usr2', 'full_name' => 'User 2', 'email' => 'us2@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['username' => 'usr3', 'full_name' => 'User 3', 'email' => 'us3@example.com', 'role' => 'Staff', 'status' => 'Active'],
            ['username' => 'usr4', 'full_name' => 'User 4', 'email' => 'us4@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
            ['username' => 'usr5', 'full_name' => 'User 5', 'email' => 'us5@example.com', 'role' => 'Staff', 'status' => 'Active'],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['username' => $user['username']],
                [
                    'full_name' => $user['full_name'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'status' => $user['status'],
                    'created_at' => now(),
                ]
            );
        }
    }
}
