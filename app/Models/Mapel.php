<?php

namespace App\Models;

use App\Models\Scopes\BySemesterScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';
    protected $fillable = ['nama'];

    public function Nilai()
    {
        return $this->hasMany(Nilai::class);
    }
    public function JadwalPelajaran()
    {
        return $this->hasMany(JadwalPelajaran::class);
    }

    public function gurus()
    {
        return $this->belongsToMany(User::class, 'guru_mapels', 'mapel_id', 'guru_id');
    }
}
