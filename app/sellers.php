<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sellers extends Model
{
    protected $fillable = ['name','email','image','phone','descri'];
}
