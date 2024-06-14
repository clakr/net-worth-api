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
                ['name' => 'Income'],
                ['name' => 'Technology'],
                ['name' => 'Clothing'],
                ['name' => 'Gifts'],
                ['name' => 'Recreation'],
                ['name' => 'Miscellaneous'],
                ['name' => 'Medical Health'],
            ]);
    }
}
