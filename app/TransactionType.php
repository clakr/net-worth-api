<?php

namespace App;

enum TransactionType: string
{
    case EXPENSE = 'expense';
    case INCOME = 'income';
}
