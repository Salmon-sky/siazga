<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haziq extends Model
{
    use HasFactory;

    protected $table = 'haziqs';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
}
