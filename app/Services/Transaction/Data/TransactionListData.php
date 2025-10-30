<?php

namespace App\Services\Transaction\Data;

use App\Services\Transaction\TransactionType;
use Spatie\LaravelData\Data;

final class TransactionListData extends Data
{
    public function __construct(
        public ?TransactionType $type,
        public ?string $q,
        public ?int $offset,
        public ?int $limit,
        public ?string $sort,
        public ?array $dates

     )
    {
    }

    public static function rules(): array
    {
        return [
            'type' => ['sometimes', 'nullable', 'string', 'in:income,expense'],
            'q' => ['sometimes', 'nullable', 'string'],
            'offset' => ['sometimes', 'nullable', 'integer'],
            'limit' => ['sometimes', 'nullable', 'integer'],
            'sort' => ['sometimes', 'nullable', 'string'],
            'dates' => ['sometimes', 'nullable', 'array'],
        ];
    }
}
