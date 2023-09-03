<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerationModel extends Model
{
    use HasFactory;

    protected $table = 'generations';

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'current'
    ];
}
