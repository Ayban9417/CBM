<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppAccount extends Model
{
    protected $table = "users";
    
    protected $guarded = ['id'];
}
