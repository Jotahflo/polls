<?php

namespace polls;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = ['id_question', 'id_user', 'content'];
    public $timestamps = false;
}
