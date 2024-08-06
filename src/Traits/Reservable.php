<?php

namespace Yanselmask\Reservable\Traits;

use Yanselmask\Reservable\Models\Reserve;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Yanselmask\Reservable\Traits\ReservesData\GetReserves;
use Yanselmask\Reservable\Traits\Reserves\ReservableReserve;

trait Reservable
{
    use ReservableReserve,GetReserves;

    public function reserves(): MorphMany
    {
        return $this->morphMany(Reserve::class,'reservable');

    }
}
