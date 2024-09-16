<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockAdjustment extends Model
{
    use HasFactory;



    // relationship
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
