<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    public $primaryKey = 'id';
    public $timestamps = true;

    function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
    public function customers()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
