<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kocak extends Model
{
    use HasFactory;

    protected $table = 'haziqs';

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
    ];
}
