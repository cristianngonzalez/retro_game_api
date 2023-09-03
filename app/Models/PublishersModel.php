<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishersModel extends Model
{
    use HasFactory;

    protected $table = 'publishers';

    protected $fillable = [
        'name',
        'country',
        'history',
        'website',
        'founded',
        'description',
        'logo'
    ];
}
