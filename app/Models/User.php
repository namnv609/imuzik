<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ["name", "email", "password"];
    protected $hidden = ["password", "remember_token"];

    public function albums()
    {
        return $this->hasMany(\App\Models\Album::class);
    }
}
