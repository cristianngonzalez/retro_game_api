<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufacturerModel extends Model
{
    use HasFactory;

    protected $table = 'manufacturers';

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
