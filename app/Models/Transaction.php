<?php

namespace App\Models;

use App\Observers\TransactionObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy([TransactionObserver::class])]
class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'sub_category_id',
        'amount',
        'created_at',
        'updated_at',
    ];

    public function netWorth(): BelongsTo
    {
        return $this->belongsTo(NetWorth::class);
    }

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
