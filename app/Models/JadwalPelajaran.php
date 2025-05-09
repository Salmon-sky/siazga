<?php

namespace App\Models;

use App\Models\Scopes\BySemesterScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pelajaran';
    protected $fillable = ['jam_ke','id_kelas','id_mapel', 'id_guru', 'hari', 'jam_mulai', 'jam_selesai', 'semester_id'];

    public function Jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_kelas','id');
    }
    public function Mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel','id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_guru','id');
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new BySemesterScope);
    }
}
