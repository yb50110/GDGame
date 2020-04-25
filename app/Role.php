<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function sessionUser()
    {
        return $this->hasMany('App\SessionUser');
    }
}
