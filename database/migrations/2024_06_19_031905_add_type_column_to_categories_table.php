<?php

use App\CategoryType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('new_categories', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default(CategoryType::EXPENSE);
            $table->string('name');
            $table->timestamps();
        });

        DB::table('new_categories')->insert(DB::table('categories')->select()->get()->toArray());

        Schema::drop('categories');
        Schema::rename('new_categories', 'categories');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('old_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('old_categories')->insert(DB::table('categories')->select()->get()->toArray());

        Schema::drop('categories');
        Schema::rename('old_categories', 'categories');
    }
};
