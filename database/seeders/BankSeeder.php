<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("banks")->insert([
            "name" => "Сбер",    
            "interest_rate" => "81.7",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),    
        ]);

        DB::table("banks")->insert([
            "name" => "ВТБ",    
            "interest_rate" => "64.5",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),    
        ]);

        DB::table("banks")->insert([
            "name" => "Тинькофф",    
            "interest_rate" => "24.8",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),    
        ]);
    }
}
