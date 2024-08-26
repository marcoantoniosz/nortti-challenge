<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //Category Seeds

        Category::factory()->create([
            'name' => 'Rock',
        ]);
        Category::factory()->create([
            'name' => 'Alternative'
        ]);
        Category::factory()->create([
            'name' => 'Pop'
        ]);
        Category::factory()->create([
            'name' => 'Electronic'
        ]);

        //Category Seeds

        //Product Seeds

        Product::factory()->create([
            'name' => 'OK Computer - Radiohead',
            'category_id' => 1,
            'price' => 9.99,
            'stock' => 10,
        ]);
        Product::factory()->create([
            'name' => 'Vespertine - Bjork',
            'category_id' => 2,
            'price' => 14.99,
            'stock' => 25,
        ]);
        Product::factory()->create([
            'name' => 'Melodrama - Lorde',
            'category_id' => 3,
            'price' => 14.99,
            'stock' => 5,
        ]);
        Product::factory()->create([
            'name' => '7G - A. G. Cook',
            'category_id' => 4,
            'price' => 20.99,
            'stock' => 15,
        ]);
    }
}
