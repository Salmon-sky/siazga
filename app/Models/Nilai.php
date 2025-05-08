<?php

namespace App\Models;

use App\Models\Scopes\BySemesterScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilais';
    protected $fillable = ['id_siswa', 'id_mapel', 'id_semester', 'id_guru', 'tugas', 'uts', 'uas', 'keterangan', 'semester_id'];

    public function Siswa()
    {
        return $this->belongsTo(User::class, 'id_siswa', 'id');
    }

    public function Guru()
    {
        return $this->belongsTo(User::class, 'id_guru', 'id');
    }
    public function Jadwal()
    {
        return $this->belongsTo(JadwalPelajaran::class, 'id_guru', 'id');
    }
    public function Mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel', 'id');
    }
    public function Semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_siswa', 'id');
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new BySemesterScope);
    }
}
