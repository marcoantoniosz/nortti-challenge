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
            'image' => 'https://m.media-amazon.com/images/I/715LZJ5qX0L._UF1000,1000_QL80_.jpg',
            'category_id' => 1,
            'price' => 9.99,
            'stock' => 10,
        ]);
        Product::factory()->create([
            'name' => 'Vespertine - Bjork',
            'image' => 'https://monkeybuzz.com.br/wp-content/uploads/2019/06/bjork-vespertine.jpg',
            'category_id' => 2,
            'price' => 14.99,
            'stock' => 25,
        ]);
        Product::factory()->create([
            'name' => 'Melodrama - Lorde',
            'image' => 'https://m.media-amazon.com/images/I/71fwgxq0wML._UF1000,1000_QL80_.jpg',
            'category_id' => 3,
            'price' => 14.99,
            'stock' => 5,
        ]);
        Product::factory()->create([
            'name' => '7G - A. G. Cook',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/6/68/A._G._Cook_-_7G.jpg',
            'category_id' => 4,
            'price' => 20.99,
            'stock' => 15,
        ]);
    }
}
