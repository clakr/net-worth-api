<?php

namespace App\Observers;

use App\Models\Transaction;
use App\TransactionType;

class TransactionObserver
{
    /**
     * Handle the Transaction "created" event.
     */
    public function created(Transaction $transaction): void
    {
        if ($transaction->type === TransactionType::INCOME) {
            $transaction->netWorth()->increment('amount', $transaction->amount);
        }
    }

    /**
     * Handle the Transaction "updated" event.
     */
    public function updated(Transaction $transaction): void
    {
        //
    }

    /**
     * Handle the Transaction "deleted" event.
     */
    public function deleted(Transaction $transaction): void
    {
        //
    }

    /**
     * Handle the Transaction "restored" event.
     */
    public function restored(Transaction $transaction): void
    {
        //
    }

    /**
     * Handle the Transaction "force deleted" event.
     */
    public function forceDeleted(Transaction $transaction): void
    {
        //
    }
}
