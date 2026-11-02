<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSampleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pos_customers')->insert([
            ['name'=>'Andrea Santos','email'=>'andrea@example.com','phone'=>'09171234567','status'=>'Active'],
            ['name'=>'Miguel Reyes','email'=>'miguel@example.com','phone'=>'09181234567','status'=>'Active'],
            ['name'=>'Sofia Cruz','email'=>'sofia@example.com','phone'=>'09191234567','status'=>'Inactive'],
            ['name'=>'Daniel Garcia','email'=>'daniel@example.com','phone'=>'09201234567','status'=>'Active'],
            ['name'=>'Isabella Lim','email'=>'isabella@example.com','phone'=>'09211234567','status'=>'Active'],
        ]);
        DB::table('pos_staff')->insert([
            ['name'=>'Admin One','email'=>'admin@example.com','role'=>'Administrator','status'=>'Active'],
            ['name'=>'Maria Lopez','email'=>'maria@example.com','role'=>'Cashier','status'=>'Active'],
            ['name'=>'James Tan','email'=>'james@example.com','role'=>'Cashier','status'=>'Active'],
            ['name'=>'Nicole Ramos','email'=>'nicole@example.com','role'=>'Manager','status'=>'Active'],
            ['name'=>'Paolo Mendoza','email'=>'paolo@example.com','role'=>'Staff','status'=>'Inactive'],
        ]);
    }
}
