<?php

namespace App\Models;

use App\Models\Song;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'song_id',
    ];
    public function songs()
    {
        return $this->belongsTo(Song::class, 'song_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    protected $table = 'like' ;
}
