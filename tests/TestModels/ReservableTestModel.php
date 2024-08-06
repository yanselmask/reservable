<?php

namespace Yanselmask\Reservable\Tests\TestModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yanselmask\Reservable\Interfaces\ReservableInterface;
use Yanselmask\Reservable\Traits\Reservable;

class ReservableTestModel extends Model implements ReservableInterface
{
    use HasFactory,Reservable;
    protected $fillable = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
//        $this->checkAvailability = false;
    }
}
