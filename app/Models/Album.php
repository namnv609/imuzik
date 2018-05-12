<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ["name", "description", "cover"];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function songs()
    {
        return $this->hasMany(\App\Models\Song::class);
    }
}
