<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruMapel extends Model
{
    /** @use HasFactory<\Database\Factories\GuruMapelFactory> */
    use HasFactory;

    protected $fillable = [
        'id_guru',
        'id_mapel',
    ];
}
