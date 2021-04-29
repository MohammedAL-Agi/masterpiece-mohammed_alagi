<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $primaryKey = 'id';
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(Category::class, 'product_id');
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
