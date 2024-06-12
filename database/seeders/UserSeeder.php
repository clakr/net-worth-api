<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(2)
            ->sequence([
                'name' => 'Test Admin',
                'email' => 'test@admin.com',
            ], [
                'name' => 'Clark Tolosa',
                'email' => 'clarktolosa@gmail.com',
            ])
            ->create();

        User::factory(8)->create();
    }
}
