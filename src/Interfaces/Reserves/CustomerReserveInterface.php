<?php

namespace Yanselmask\Reservable\Interfaces\Reserves;

use DateTime;
use Carbon\Carbon;
use DateTimeInterface;
use Yanselmask\Reservable\Models\Reserve;
use Yanselmask\Reservable\Interfaces\ReservableInterface;

interface  CustomerReserveInterface{
    public function reserve(ReservableInterface $reservable, DatetimeInterface|Carbon|DateTime $reserveDate, string $reserveTime = '00:00:00',null|DatetimeInterface|Carbon|DateTime $endReserveDate = null, ?string $endReserveTime = null, ?array $metadata = null): Reserve | bool;
}
