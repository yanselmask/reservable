<?php

namespace Yanselmask\Reservable\Traits;

use Yanselmask\Reservable\Models\Reserve;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Yanselmask\Reservable\Traits\Reserves\CustomerReserve;
use Yanselmask\Reservable\Traits\ReservesData\GetReserves;

trait Customer
{

    use GetReserves,CustomerReserve;

    public function reserves():MorphMany{
        return $this->morphMany(Reserve::class,'customer');
    }
}
