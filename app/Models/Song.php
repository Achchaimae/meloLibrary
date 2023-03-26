<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function User (){
        return $this->belongsToMany(User::class);
    }
    public function comments (){
        return $this->hasMany(Comments::class);
    }
    public function likes (){
        return $this->hasMany(Like::class, 'song_id', 'id');
    }
}