<?php

use App\Models\NetWorth;
use App\Models\Transaction;
use App\TransactionType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(NetWorth::class)->constrained();
            $table->string('type')->default(TransactionType::EXPENSE);
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
