<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eka extends Model
{
    use HasFactory;

    protected $table = 'ekas';

    protected $fillable = [
        'nama',
        'email',
        'password',
    ];
}
