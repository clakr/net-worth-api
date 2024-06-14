<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\TransactionType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstWhere('email', 'clarktolosa@gmail.com');

        $incomeCategoryId = Category::firstWhere('name', 'Income')->id;
        $technologyCategoryId = Category::firstWhere('name', 'Technology')->id;
        $clothingCategoryId = Category::firstWhere('name', 'Clothing')->id;
        $giftsCategoryId = Category::firstWhere('name', 'Gifts')->id;
        $recreationCategoryId = Category::firstWhere('name', 'Recreation')->id;
        $miscellaneousCategoryId = Category::firstWhere('name', 'Miscellaneous')->id;
        $medicalHealthCategoryId = Category::firstWhere('name', 'Medical Health')->id;

        $user->netWorth
            ->transactions()
            ->createMany([
                [
                    'name' => 'Stray Kids Concert',
                    'amount' => 3500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::MARCH, 11),
                    'updated_at' => Carbon::create(2023, Carbon::MARCH, 11),
                    'category_id' => $recreationCategoryId
                ],
                [
                    'name' => 'Harry Styles Concert',
                    'amount' => 4000,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::MARCH, 14),
                    'updated_at' => Carbon::create(2023, Carbon::MARCH, 14),
                    'category_id' => $recreationCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 12199.42,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::APRIL, 28),
                    'updated_at' => Carbon::create(2023, Carbon::APRIL, 28),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::MAY, 12),
                    'updated_at' => Carbon::create(2023, Carbon::MAY, 12),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::MAY, 30),
                    'updated_at' => Carbon::create(2023, Carbon::MAY, 30),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'KPOP Overpass',
                    'amount' => 2700,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::JUNE, 11),
                    'updated_at' => Carbon::create(2023, Carbon::JUNE, 11),
                    'category_id' => $recreationCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::JUNE, 12),
                    'updated_at' => Carbon::create(2023, Carbon::JUNE, 12),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::JUNE, 14),
                    'updated_at' => Carbon::create(2023, Carbon::JUNE, 14),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11719.27,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::JUNE, 29),
                    'updated_at' => Carbon::create(2023, Carbon::JUNE, 29),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::JULY, 13),
                    'updated_at' => Carbon::create(2023, Carbon::JULY, 13),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::JULY, 15),
                    'updated_at' => Carbon::create(2023, Carbon::JULY, 15),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::JULY, 28),
                    'updated_at' => Carbon::create(2023, Carbon::JULY, 28),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Portable Fans',
                    'description' => '₱1 Sale, bought 5 pcs',
                    'amount' => 381,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 8),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 8),
                    'category_id' => $miscellaneousCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 14),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 14),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 19),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 19),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Rechargeable Razor',
                    'amount' => 365,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 29),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 29),
                    'category_id' => $miscellaneousCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::AUGUST, 30),
                    'updated_at' => Carbon::create(2023, Carbon::AUGUST, 30),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Jordan Stadium 90',
                    'description' => 'Near 50% discount',
                    'amount' => 4249,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 7),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 7),
                    'category_id' => $clothingCategoryId
                ],
                [
                    'name' => 'LEGO Orchid Plant',
                    'description' => 'Birthday Gift for Kim',
                    'amount' => 4249,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 7),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 7),
                    'category_id' => $giftsCategoryId
                ],
                [
                    'name' => 'NIKI Concert',
                    'description' => 'Anniversary Gift for Kim',
                    'amount' => 2900,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 13),
                    'category_id' => $giftsCategoryId
                ],
                [
                    'name' => 'NIKI Concert',
                    'amount' => 2900,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 13),
                    'category_id' => $recreationCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 14),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 14),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 18),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 18),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 28),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 28),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Nike Utility Power Duffel',
                    'description' => 'Bought for Baguio',
                    'amount' => 2905.5,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 29),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 29),
                    'category_id' => $clothingCategoryId
                ],
                [
                    'name' => 'TWICE Concert',
                    'amount' => 12000,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::SEPTEMBER, 30),
                    'updated_at' => Carbon::create(2023, Carbon::SEPTEMBER, 30),
                    'category_id' => $recreationCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::OCTOBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::OCTOBER, 13),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::OCTOBER, 16),
                    'updated_at' => Carbon::create(2023, Carbon::OCTOBER, 16),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::OCTOBER, 27),
                    'updated_at' => Carbon::create(2023, Carbon::OCTOBER, 27),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Logitech K380',
                    'description' => 'For Macbook',
                    'amount' => 1315,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 13),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'USB Hub and HDMI Cable',
                    'description' => 'For Macbook',
                    'amount' => 1443,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 13),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 13),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 14),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 14),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'KOORUI 34E6UC Monitor',
                    'amount' => 15649,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 19),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 19),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'Baseball Cap',
                    'description' => 'Christmas Gift for Mama Em',
                    'amount' => 453,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 23),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 23),
                    'category_id' => $giftsCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 25),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 25),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => '13th Month',
                    'amount' => 17708.33,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 29),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 29),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11721.30,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::NOVEMBER, 29),
                    'updated_at' => Carbon::create(2023, Carbon::NOVEMBER, 29),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Tecware Forge M2 MATX Case',
                    'amount' => 2464,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 5),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 5),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'KOORUI Monitor Stand',
                    'amount' => 960,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 5),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 5),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'Casetify iPhone XS Max Case',
                    'amount' => 220,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 6),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 6),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'Personal Computer',
                    'amount' => 60000,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 6),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 6),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'USB to Lightning Cable',
                    'amount' => 333,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 14),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 14),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 14),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 14),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Royal Kludge 81',
                    'amount' => 2601,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 15),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 15),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'Windows 11 License',
                    'amount' => 100,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 27),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 27),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 14788.22,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2023, Carbon::DECEMBER, 29),
                    'updated_at' => Carbon::create(2023, Carbon::DECEMBER, 29),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::JANUARY, 6),
                    'updated_at' => Carbon::create(2024, Carbon::JANUARY, 6),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 20379.84,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::JANUARY, 15),
                    'updated_at' => Carbon::create(2024, Carbon::JANUARY, 15),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11615.05,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::JANUARY, 29),
                    'updated_at' => Carbon::create(2024, Carbon::JANUARY, 29),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 3),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 3),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Sandugo Sinai Sandals',
                    'amount' => 673,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 12),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 12),
                    'category_id' => $clothingCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13645.52,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 13),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 13),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Bucket Hat',
                    'amount' => 207,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 14),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 14),
                    'category_id' => $clothingCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11530.05,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::FEBRUARY, 28),
                    'updated_at' => Carbon::create(2024, Carbon::FEBRUARY, 28),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::MARCH, 6),
                    'updated_at' => Carbon::create(2024, Carbon::MARCH, 6),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 14298.90,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MARCH, 14),
                    'updated_at' => Carbon::create(2024, Carbon::MARCH, 14),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 16334.49,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MARCH, 27),
                    'updated_at' => Carbon::create(2024, Carbon::MARCH, 27),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'FEU Finals Project',
                    'description' => 'Redesigning Pokemon Go Store Page',
                    'amount' => 3000,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MARCH, 30),
                    'updated_at' => Carbon::create(2024, Carbon::MARCH, 30),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::APRIL, 6),
                    'updated_at' => Carbon::create(2024, Carbon::APRIL, 6),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::APRIL, 12),
                    'updated_at' => Carbon::create(2024, Carbon::APRIL, 12),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Apple Watch SE & AirPods 3rd Gen',
                    'amount' => 26000,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::APRIL, 28),
                    'updated_at' => Carbon::create(2024, Carbon::APRIL, 28),
                    'category_id' => $technologyCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11530.05,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::APRIL, 29),
                    'updated_at' => Carbon::create(2024, Carbon::APRIL, 29),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MAY, 14),
                    'updated_at' => Carbon::create(2024, Carbon::MAY, 14),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::MAY, 18),
                    'updated_at' => Carbon::create(2024, Carbon::MAY, 18),
                    'category_id' => $medicalHealthCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 11530.05,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::MAY, 29),
                    'updated_at' => Carbon::create(2024, Carbon::MAY, 29),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Payroll',
                    'amount' => 13187.55,
                    'type' => TransactionType::INCOME,
                    'created_at' => Carbon::create(2024, Carbon::JUNE, 13),
                    'updated_at' => Carbon::create(2024, Carbon::JUNE, 13),
                    'category_id' => $incomeCategoryId
                ],
                [
                    'name' => 'Monthly Dentist Visit',
                    'amount' => 1500,
                    'type' => TransactionType::EXPENSE,
                    'created_at' => Carbon::create(2024, Carbon::JUNE, 15),
                    'updated_at' => Carbon::create(2024, Carbon::JUNE, 15),
                    'category_id' => $medicalHealthCategoryId
                ],
            ]);
    }
}
