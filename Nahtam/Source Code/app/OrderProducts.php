<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    protected $table = "order_products";
    public $primaryKey = 'id';
}