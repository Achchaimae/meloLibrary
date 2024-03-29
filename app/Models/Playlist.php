<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
    ];
    public function Songs (){
        return $this->belongsToMany(Song::class);
    }
}

