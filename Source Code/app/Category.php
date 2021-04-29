<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['name', 'image'];

    function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
