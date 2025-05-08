<?php

namespace App\Models;

use App\Models\Scopes\BySemesterScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presensi extends Model
{
    use HasFactory;

    protected $table = 'presensis';
    protected $fillable = ['id_siswa', 'id_mapel', 'status','created_at', 'updated_at', 'semester_id'];

    public function Siswa()
    {
        return $this->belongsTo(User::class, 'id_siswa','id');
    }
    public function Kelas()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan','id');
    }
    public function Mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel','id');
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new BySemesterScope);
    }
}
