<?php

namespace App\Services\Transaction;

enum TransactionType: string
{
    case INCOME = 'income';
    case EXPENSE = 'expense';
}
