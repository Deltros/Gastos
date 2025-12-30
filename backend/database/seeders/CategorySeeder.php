<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'name' => 'salary'],
            ['id' => 2, 'name' => 'freelance'],
            ['id' => 3, 'name' => 'groceries'],
            ['id' => 4, 'name' => 'rent'],
            ['id' => 5, 'name' => 'entertainment'],
            ['id' => 6, 'name' => 'transport'],
            ['id' => 7, 'name' => 'savings'],
            ['id' => 8, 'name' => 'other'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
