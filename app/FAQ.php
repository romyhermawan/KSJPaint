<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'faq';
    protected $fillable = ['url','question','answer','order'];
    protected $hidden = ['remember_token'];
    public $timestamp = true;
}
