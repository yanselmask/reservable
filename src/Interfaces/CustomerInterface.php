<?php
namespace Yanselmask\Reservable\Interfaces;

use Yanselmask\Reservable\Interfaces\ReservesData\GetReservesInterface;
use Yanselmask\Reservable\Interfaces\Reserves\CustomerReserveInterface;

interface CustomerInterface extends CustomerReserveInterface,GetReservesInterface,ReservesRelationshipInterface {

}
