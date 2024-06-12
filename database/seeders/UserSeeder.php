<?php

namespace Database\Seeders;

use App\Models\User;
use App\UserRole;
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
                'role' => UserRole::ADMIN,
            ], [
                'name' => 'Clark Tolosa',
                'email' => 'clarktolosa@gmail.com',
                'role' => UserRole::USER,
            ])
            ->create();

        User::factory(8)
            ->sequence(
                ['role' => UserRole::ADMIN],
                ['role' => UserRole::USER],
            )
            ->create();
    }
}
