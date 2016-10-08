<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $table = 'tutorial';
    protected $fillable = ['header','image','title','description'];
    protected $hidden = ['remember_token'];
    public $timestamp = true;
}
