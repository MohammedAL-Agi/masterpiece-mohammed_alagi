<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['name', 'email', 'password', 'image'];
}
