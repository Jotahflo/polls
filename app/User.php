<?php

namespace polls;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['full_name'];
    public $timestamps = false;
}
