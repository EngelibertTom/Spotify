<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    public function songs() {
        //SELECT * FROM songs WHERE user_id=$this->id
        return $this->hasMany("App\Models\Song", "album_id");
    }
}
