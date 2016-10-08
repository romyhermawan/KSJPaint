<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';
    protected $fillable = ['url','order'];
    protected $hidden = ['remember_token'];
    public $timestamp = true;
}
