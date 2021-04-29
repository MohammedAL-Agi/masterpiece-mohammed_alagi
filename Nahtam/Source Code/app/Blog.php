<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";
    public $primaryKey = 'id';
    public $timestamps = true;

    function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
