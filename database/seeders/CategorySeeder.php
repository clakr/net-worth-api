<?php

namespace Database\Seeders;

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
            ->createMany([
                ['name' => 'Medical Health'],
                ['name' => 'Income'],
                ['name' => 'Technology'],
                ['name' => 'Clothing'],
                ['name' => 'Gifts'],
                ['name' => 'Recreation'],
                ['name' => 'Personal Care'],
            ]);
    }
}
