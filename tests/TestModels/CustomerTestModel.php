<?php

namespace Yanselmask\Reservable\Tests\TestModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yanselmask\Reservable\Interfaces\CustomerInterface;
use Yanselmask\Reservable\Traits\Customer;

class CustomerTestModel extends Model implements CustomerInterface
{
    use HasFactory,Customer;

    protected $fillable = ['id'];
}
