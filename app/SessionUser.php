<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionUser extends Model
{
    protected $table = 'session_user';

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
