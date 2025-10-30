<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Services\Transaction\Data\TransactionListData;
use Illuminate\Support\Collection;

class TransactionRepository
{
    public function getAll(TransactionListData $data): Collection
    {
        $query = Transaction::query();

        if ($data->q) {
            $query->where(function ($q) use ($data) {
                $q->where('description', 'like', "%{$data->q}%")
                    ->orWhere('amount', 'like', "%{$data->q}%")
                    ->orWhereHas('category', fn($qc) => $qc->where('name', 'like', "%{$data->q}%"));
            });
        }

        if ($data->type) {
            $query->where('type', $data->type);
        }

        if ($data->dates) {
            $query->whereBetween('date', $data->dates);
        }else{
            $query->where('date', '>=', now()->subMonth());
        }
        if ($data->limit) {
            $query->limit($data->limit);
        }

        if ($data->offset) {
            $query->offset($data->offset);
        }
        return $query->get();
    }

    public function create(array $data): Transaction
    {
        return Transaction::query()->create($data);
    }

    public function update(Transaction $transaction, array $data): bool
    {
        return $transaction->update($data);
    }

    public function delete(Transaction $transaction): void
    {
        $transaction->delete();
    }

    public function find(int $transactionId): Transaction
    {
        return Transaction::query()->find($transactionId);
    }
}
