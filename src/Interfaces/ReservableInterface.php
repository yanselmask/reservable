<?php
namespace Yanselmask\Reservable\Interfaces;


use Yanselmask\Reservable\Interfaces\ReservesData\GetReservesInterface;
use Yanselmask\Reservable\Interfaces\Reserves\ReservableReserveInterface;

interface ReservableInterface extends ReservableReserveInterface,GetReservesInterface,ReservesRelationshipInterface {
}
