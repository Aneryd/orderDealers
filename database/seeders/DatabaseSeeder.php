<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Seeders\BankSeeder;
// use Database\Seeders\OrderSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BankSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
