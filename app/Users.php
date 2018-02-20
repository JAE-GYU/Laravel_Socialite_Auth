<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Users extends Authenticatable
{
    //
    protected $fillable = ['provider','provider_id','user_name','created_at','updated_at'];
}
