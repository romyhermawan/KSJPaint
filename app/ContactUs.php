<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contactus';
    protected $fillable = ['title','email','alamat1','alamat2','line','instagram','bank1','bank2','bank3','phone1','phone2'];
    protected $hidden = ['remember_token'];
    public $timestamp = true;
}
