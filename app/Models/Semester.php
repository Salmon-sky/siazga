<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'semester';
    protected $fillable = ['nama', 'is_active'];

    public function Nilai()
    {
        return $this->hasMany(Nilai::class);
    }

}
