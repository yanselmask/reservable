<?php

namespace Yanselmask\Reservable\Traits;

use DateTime;
use Carbon\Carbon;
use DateTimeInterface;

trait LaraReserveDateTimeTrait
{
    private function createCarbonDateTime(DateTimeInterface $date): DateTime
    {

        if(!$date instanceof Carbon){
            return Carbon::createFromInterface($date);
        }

        return $date;
    }
}
