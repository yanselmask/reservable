<?php

namespace Yanselmask\Reservable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = ['reserved_date', 'metadata', 'reserved_time','end_reserve_date','end_reserve_time'];
    protected $casts = ['metadata' => 'array', 'reserved_date' => 'date','end_reserve_date' => 'date'];

    public function reservable(): MorphTo
    {
        return $this->morphTo();
    }

    public function customer(): MorphTo
    {
        return $this->morphTo('customer', 'customer_type', 'customer_id');
    }

    public function scopeActiveReserves(Builder $query)
    {
        return $query->with('customer')->where('reserved_date', '>=', now());
    }
}
