<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'song_id',
    ];
    public function songs()
    {
        return $this->belongsTo(Song::class);
    }
}
