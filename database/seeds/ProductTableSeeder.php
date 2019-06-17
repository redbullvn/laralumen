<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $products = [
            ['category_id' => 1, 'name' => 'Product One', 'slug' => 'product-1', 'price' => 129990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 2, 'name' => 'Product On2', 'slug' => 'product-2', 'price' => 229990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 4, 'name' => 'Product On3', 'slug' => 'product-3', 'price' => 329990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 6, 'name' => 'Product On4', 'slug' => 'product-4', 'price' => 429990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 8, 'name' => 'Product On5', 'slug' => 'product-5', 'price' => 529990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 8, 'name' => 'Product On6', 'slug' => 'product-6', 'price' => 629990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 6, 'name' => 'Product On7', 'slug' => 'product-7', 'price' => 729990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 5, 'name' => 'Product On8', 'slug' => 'product-8', 'price' => 829990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 8, 'name' => 'Product On9', 'slug' => 'product-9', 'price' => 929990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 10, 'name' => 'Product On10', 'slug' => 'product-10', 'price' => 1029990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 5, 'name' => 'Product On11', 'slug' => 'product-11', 'price' => 1129990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 4, 'name' => 'Product O12e', 'slug' => 'product-12', 'price' => 1129990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 6, 'name' => 'Product 13ne', 'slug' => 'product-13', 'price' => 1213990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 8, 'name' => 'Product 14One', 'slug' => 'product-114', 'price' => 12991490, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 8, 'name' => 'Product15One', 'slug' => 'product151', 'price' => 1529990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 1, 'name' => 'Product 16One', 'slug' => 'product-116', 'price' => 12916990, 'created_at' => $now, 'updated_at' => $now],
            ['category_id' => 5, 'name' => 'Product One17', 'slug' => 'product-117', 'price' => 12999017, 'created_at' => $now, 'updated_at' => $now],
        ];

        Product::insert($products);
    }
}
