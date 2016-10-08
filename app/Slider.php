<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';
    protected $fillable = ['url','order'];
    protected $hidden = ['remember_token'];
    public $timestamp = true;
}
