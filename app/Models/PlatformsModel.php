<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatformsModel extends Model
{
    use HasFactory;

    protected $table = 'platforms';

    protected $fillable = [
        'name',
        'description',
        'logo',
        'release_date',
        'discontinued_date',
        'manufacturer_id',
        'generation_id'
    ];
}
