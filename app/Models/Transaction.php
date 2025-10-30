<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = ['category_id', 'amount', 'description', 'date', 'type'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
