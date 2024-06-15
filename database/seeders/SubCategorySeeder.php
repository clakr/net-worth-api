<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::factory()
            ->for(Category::firstWhere('name', 'Medical Health'))
            ->createMany([
                ['name' => 'Dentist Visits'],
            ]);

        SubCategory::factory()
            ->for(Category::firstWhere('name', 'Income'))
            ->createMany([
                ['name' => 'Salary'],
                ['name' => 'Self-Employed Income'],
                ['name' => 'Bonus'],
            ]);

        SubCategory::factory()
            ->for(Category::firstWhere('name', 'Technology'))
            ->createMany([
                ['name' => 'Accessories'],
                ['name' => 'Peripherals'],
                ['name' => 'Licenses'],
                ['name' => 'Computer'],
            ]);

        SubCategory::factory()
            ->for(Category::firstWhere('name', 'Clothing'))
            ->createMany([
                ['name' => 'Leisure Clothing'],
                ['name' => 'Athletic Clothing'],
            ]);

        SubCategory::factory()
            ->for(Category::firstWhere('name', 'Gifts'))
            ->createMany([
                ['name' => 'Holiday Gifts'],
                ['name' => 'Birthday Gifts'],
                ['name' => 'Anniversary Gifts'],
            ]);

        SubCategory::factory()
            ->for(Category::firstWhere('name', 'Recreation'))
            ->createMany([
                ['name' => 'Concerts'],
            ]);

        SubCategory::factory()
            ->for(Category::firstWhere('name', 'Personal Care'))
            ->createMany([
                ['name' => 'Grooming'],
                ['name' => 'Convenience'],
            ]);
    }
}
