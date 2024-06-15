<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use App\Models\Transaction;
use App\Models\User;
use App\TransactionType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $netWorth = User::firstWhere('email', 'clarktolosa@gmail.com')->netWorth;

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Dentist Visits'))
            ->createMany([
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::JUNE, 12),
                    'updated_at' => Carbon::create(2023, Carbon::JUNE, 12),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::JULY, 15),
                    'updated_at' => Carbon::create(2023, Carbon::JULY, 15),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 19),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 19),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 18),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 18),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::OCTOBER, 16),
                    'updated_at' => Carbon::create(2023, Carbon::OCTOBER, 16),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 25),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 25),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::JANUARY, 6),
                    'updated_at' => Carbon::create(2024, Carbon::JANUARY, 6),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 3),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 3),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::MARCH, 6),
                    'updated_at' => Carbon::create(2024, Carbon::MARCH, 6),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::APRIL, 6),
                    'updated_at' => Carbon::create(2024, Carbon::APRIL, 6),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::MAY, 18),
                    'updated_at' => Carbon::create(2024, Carbon::MAY, 18),
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::JUNE, 15),
                    'updated_at' => Carbon::create(2024, Carbon::JUNE, 15),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Salary'))
            ->createMany([
                [
                    'name' => 'Payroll',
                    'amount' => 12199.42,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::APRIL, 28),
                    'updated_at' => Carbon::create(2023, Carbon::APRIL, 28),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::MAY, 12),
                    'updated_at' => Carbon::create(2023, Carbon::MAY, 12),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::MAY, 30),
                    'updated_at' => Carbon::create(2023, Carbon::MAY, 30),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::JUNE, 14),
                    'updated_at' => Carbon::create(2023, Carbon::JUNE, 14),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11719.27,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::JUNE, 29),
                    'updated_at' => Carbon::create(2023, Carbon::JUNE, 29),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::JULY, 13),
                    'updated_at' => Carbon::create(2023, Carbon::JULY, 13),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::JULY, 28),
                    'updated_at' => Carbon::create(2023, Carbon::JULY, 28),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 14),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 14),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 30),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 30),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 14),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 14),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 28),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 28),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::OCTOBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::OCTOBER, 13),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::OCTOBER, 27),
                    'updated_at' => Carbon::create(2023, Carbon::OCTOBER, 27),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 14),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 14),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 29),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 29),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 14),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 14),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 14788.22,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 29),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 29),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 20379.84,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::JANUARY, 15),
                    'updated_at' => Carbon::create(2024, Carbon::JANUARY, 15),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11615.05,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::JANUARY, 29),
                    'updated_at' => Carbon::create(2024, Carbon::JANUARY, 29),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13645.52,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 13),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 13),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11530.05,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 28),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 28),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 14298.90,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MARCH, 14),
                    'updated_at' => Carbon::create(2024, Carbon::MARCH, 14),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 16334.49,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MARCH, 27),
                    'updated_at' => Carbon::create(2024, Carbon::MARCH, 27),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::APRIL, 12),
                    'updated_at' => Carbon::create(2024, Carbon::APRIL, 12),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11530.05,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::APRIL, 29),
                    'updated_at' => Carbon::create(2024, Carbon::APRIL, 29),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MAY, 14),
                    'updated_at' => Carbon::create(2024, Carbon::MAY, 14),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11530.05,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MAY, 29),
                    'updated_at' => Carbon::create(2024, Carbon::MAY, 29),
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::JUNE, 13),
                    'updated_at' => Carbon::create(2024, Carbon::JUNE, 13),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Self-Employed Income'))
            ->createMany([
                [
                    'name' => 'FEU Finals Project',
                    'description' => 'Redesigning Pokemon Go Store Page',
                    'amount' => 3000,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MARCH, 30),
                    'updated_at' => Carbon::create(2024, Carbon::MARCH, 30),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Bonus'))
            ->createMany([
                [
                    'name' => '13th Month',
                    'amount' => 17708.33,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 29),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 29),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Accessories'))
            ->createMany([
                [
                    'name' => 'Logitech K380',
                    'description' => 'For Macbook',
                    'amount' => 1315,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 13),
                ],
                [
                    'name' => 'USB Hub and HDMI Cable',
                    'description' => 'For Macbook',
                    'amount' => 1443,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 13),
                ],
                [
                    'name' => 'KOORUI Monitor Stand',
                    'amount' => 960,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 5),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 5),
                ],
                [
                    'name' => 'Casetify iPhone XS Max Case',
                    'amount' => 220,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 6),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 6),
                ],
                [
                    'name' => 'USB to Lightning Cable',
                    'amount' => 333,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 14),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 14),
                ],
                [
                    'name' => 'Apple Watch SE & AirPods 3rd Gen',
                    'amount' => 26000,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::APRIL, 28),
                    'updated_at' => Carbon::create(2024, Carbon::APRIL, 28),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Peripherals'))
            ->createMany([
                [
                    'name' => 'KOORUI 34E6UC Monitor',
                    'amount' => 15649,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 19),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 19),
                ],
                [
                    'name' => 'Royal Kludge 81',
                    'amount' => 2601,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 15),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 15),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Licenses'))
            ->createMany([
                [
                    'name' => 'Windows 11 License',
                    'amount' => 100,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 27),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 27),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Computer'))
            ->createMany([
                [
                    'name' => 'Tecware Forge M2 MATX Case',
                    'amount' => 2500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 5),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 5),
                ],
                [
                    'name' => 'Personal Computer',
                    'amount' => 57500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 6),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 6),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Leisure Clothing'))
            ->createMany([
                [
                    'name' => 'Jordan Stadium 90',
                    'description' => 'Near 50% discount',
                    'amount' => 4249,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 7),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 7),
                ],
                [
                    'name' => 'Sandugo Sinai Sandals',
                    'amount' => 673,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 12),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 12),
                ],
                [
                    'name' => 'Bucket Hat',
                    'amount' => 207,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 14),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 14),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Athletic Clothing'))
            ->createMany([
                [
                    'name' => 'Nike Utility Power Duffel',
                    'description' => 'Bought for Baguio',
                    'amount' => 2905.5,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 29),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 29),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Holiday Gifts'))
            ->createMany([
                [
                    'name' => 'Baseball Cap',
                    'description' => 'Christmas Gift for Mama Em',
                    'amount' => 453,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 23),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 23),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Birthday Gifts'))
            ->createMany([
                [
                    'name' => 'LEGO Orchid Plant',
                    'description' => 'Birthday Gift for Kim',
                    'amount' => 4249,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 7),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 7),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Anniversary Gifts'))
            ->createMany([
                [
                    'name' => 'NIKI Concert',
                    'description' => 'Anniversary Gift for Kim',
                    'amount' => 2900,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 13),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Concerts'))
            ->createMany([
                [
                    'name' => 'Stray Kids Concert',
                    'amount' => 3500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::MARCH, 11),
                    'updated_at' => Carbon::create(2023, Carbon::MARCH, 11),
                ],
                [
                    'name' => 'Harry Styles Concert',
                    'amount' => 4000,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::MARCH, 14),
                    'updated_at' => Carbon::create(2023, Carbon::MARCH, 14),
                ],
                [
                    'name' => 'KPOP Overpass',
                    'amount' => 2700,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::JUNE, 11),
                    'updated_at' => Carbon::create(2023, Carbon::JUNE, 11),
                ],
                [
                    'name' => 'NIKI Concert',
                    'amount' => 2900,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 13),
                ],
                [
                    'name' => 'TWICE Concert',
                    'amount' => 12000,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 30),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 30),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Grooming'))
            ->createMany([
                [
                    'name' => 'Rechargeable Razor',
                    'amount' => 365,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 29),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 29),
                ],
            ]);

        Transaction::factory()
            ->for($netWorth)
            ->for(SubCategory::firstWhere('name', 'Convenience'))
            ->createMany([
                [
                    'name' => 'Portable Fans',
                    'description' => '₱1 Sale, bought 5 pcs',
                    'amount' => 381,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 8),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 8),
                ],
            ]);
    }
}
