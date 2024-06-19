<?php

use App\Models\NetWorth;
use App\Models\SubCategory;
use App\TransactionType;
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
        Schema::create('new_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(NetWorth::class)->constrained();
            $table->foreignIdFor(SubCategory::class)->constrained();
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('amount');
            $table->timestamps();
        });

        DB::table('new_transactions')->insert(DB::table('transactions')->select()->get()->toArray());

        Schema::drop('transactions');
        Schema::rename('new_transactions', 'transactions');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('new_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(NetWorth::class)->constrained();
            $table->foreignIdFor(SubCategory::class)->constrained();
            $table->string('type')->default(TransactionType::EXPENSE);
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('amount');
            $table->timestamps();
        });

        DB::table('new_transactions')->insert(DB::table('transactions')->select()->get()->toArray());

        Schema::drop('transactions');
        Schema::rename('new_transactions', 'transactions');
    }
};
