<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survivor extends Model
{
    protected $fillable = ['name', 'gender', 'age', 'location'];
}
