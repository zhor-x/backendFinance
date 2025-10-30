<?php

namespace App\Services\Transaction;

use App\Models\Transaction;
use App\Repositories\TransactionRepository;
use App\Services\Transaction\Data\TransactionListData;
use Illuminate\Support\Collection;

readonly class TransactionService
{
    public function __construct(private TransactionRepository $transactionRepository)
    {

    }

    public function getAll(TransactionListData $data): Collection
    {
        return $this->transactionRepository->getAll($data);
    }

    public function create(array $data): Transaction
    {
        return $this->transactionRepository->create($data);
    }

    public function update(int $categoryId, array $data): bool
    {
        $category = $this->transactionRepository->find($categoryId);
        return $this->transactionRepository->update($category, $data);
    }

    public function delete(int $categoryId): void
    {
        $category = $this->transactionRepository->find($categoryId);
        $this->transactionRepository->delete($category);
    }
}
