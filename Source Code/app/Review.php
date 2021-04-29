<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "reviews";
    public    $primaryKey = 'id';
    public    $timestamps = true;

    public function review()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
