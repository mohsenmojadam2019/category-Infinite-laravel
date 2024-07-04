<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Example: Creating a parent category
        $parentCategory = Category::create([
            'name' => 'Parent Category',
        ]);

        // Example: Creating child categories
        Category::create([
            'name' => 'Child Category 1',
            'parent_id' => $parentCategory->id,
        ]);

        Category::create([
            'name' => 'Child Category 2',
            'parent_id' => $parentCategory->id,
        ]);

    }

}
