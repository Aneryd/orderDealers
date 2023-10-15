<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("orders")->insert([
            "dealer_name" => "Китайский дилер",
            "employee_name" => "Михал Михалыч",
            "amount" => "2500000",
            "time" => "40",
            "bank_id" => "1",
            "reason" => "Кредит на китайский автомобиль",
            "status" => "NEW",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table("orders")->insert([
            "dealer_name" => "Американский дилер",
            "employee_name" => "Егор Алексеевич",
            "amount" => "6890000",
            "time" => "90",
            "bank_id" => "2",
            "reason" => "Кредит на американский автомобиль",
            "status" => "PROGRESS",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table("orders")->insert([
            "dealer_name" => "Немецкий дилер",
            "employee_name" => "Андрей Евгеньевич",
            "amount" => "12764000",
            "time" => "22",
            "bank_id" => "3",
            "reason" => "Кредит на немецкий автомобиль",
            "status" => "APPROVED",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
