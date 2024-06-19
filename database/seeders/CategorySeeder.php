<?php

namespace Database\Seeders;

use App\CategoryType;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()
            ->type(CategoryType::INCOME)
            ->createMany([
                ['name' => 'Income'],
            ]);

        Category::factory()
            ->type(CategoryType::EXPENSE)
            ->createMany([
                ['name' => 'Medical Health'],
                ['name' => 'Technology'],
                ['name' => 'Clothing'],
                ['name' => 'Gifts'],
                ['name' => 'Recreation'],
                ['name' => 'Personal Care'],
            ]);
    }
}
