<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $categories = [
            ['name' => 'Category 1', 'slug' => 'category-1', 'c_sort' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Category 2', 'slug' => 'category-2', 'c_sort' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Category 3', 'slug' => 'category-3', 'c_sort' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Category 4', 'slug' => 'category-4', 'c_sort' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Category 5', 'slug' => 'category-5', 'c_sort' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Category 6', 'slug' => 'category-6', 'c_sort' => 6, 'created_at' => $now, 'updated_at' => $now],
            
        ];

        Category::insert($categories);
    }
}
