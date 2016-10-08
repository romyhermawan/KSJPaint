<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = 'logo';
    protected $fillable = ['url'];
    protected $hidden = ['remember_token'];
    public $timestamp = true;
}
