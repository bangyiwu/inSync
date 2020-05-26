<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //protected $table = ''
    protected $casts = ['toppings' => 'array'];
    
}
