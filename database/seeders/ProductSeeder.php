<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Clear the existing data from the table
        DB::table('products')->truncate();

        // Insert 10 product values
        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'name' => "Product $i",
                'price' => rand(10, 100),
                'description' => "Description for Product $i",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
