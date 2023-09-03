<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameModel extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = [
        'name',
        'description',
        'download_link',
        'release_date',
        'publisher_id',
        'cover',
        'genre_id',
        'platform_id',
    ];

}
