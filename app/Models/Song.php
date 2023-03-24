<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model

{

    use HasFactory;
    protected $table = 'songs';
    protected $fillable = [
        'title',
        'artist',
        'writer',
        'tag',
        'language',
        'release_date',
        'duration',
        'lyrics',
    ];
    public function playlist (){
        return $this->belongsToMany(Playlist::class);
    }
}