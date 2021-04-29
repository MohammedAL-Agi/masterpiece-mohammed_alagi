<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['name', 'email', 'image', 'password'];

    function order()
    {
        $this->hasMany(Orders::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'customer_id', 'customer_id');
    }
}
