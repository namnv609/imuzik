<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ["name", "email", "password"];

    public function albums()
    {
        return $this->hasMany(\App\Models\Album::class);
    }
}
