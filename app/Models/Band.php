<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'members',
        'release_date',
        'country',
        'image',
    ];
}
