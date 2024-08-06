<?php

namespace Yanselmask\Reservable\Interfaces\ReservesData;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface GetReservesInterface
{
    public function activeReserves(): MorphMany;
    public function allReserves():  MorphMany;
    public function startedReserves(): MorphMany;
    public function endedReserves(): MorphMany;
}
