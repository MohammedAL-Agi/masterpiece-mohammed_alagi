<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";
    public $primaryKey = 'id';
    public $timestamps = true;

    function customer()
    {
        $this->belongsTo(Customer::class, 'customer_id');
    }
}
