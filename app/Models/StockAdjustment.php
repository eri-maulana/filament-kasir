<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Observers\StockAdjustmentObserver;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy(StockAdjustmentObserver::class)]
class StockAdjustment extends Model
{
    use HasFactory;

    


    // relationship
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
