<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ["name", "artist", "url", "cover", "album_id"];

    public function album()
    {
        return $this->belongsTo(\App\Models\Album::class);
    }
}
