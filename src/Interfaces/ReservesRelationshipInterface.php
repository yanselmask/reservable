<?php

namespace Yanselmask\Reservable\Interfaces;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface ReservesRelationshipInterface
{
    public function reserves(): MorphMany;
}
