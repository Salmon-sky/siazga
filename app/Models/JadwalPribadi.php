<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPribadi extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pribadi';
    protected $fillable = ['jam_ke', 'id_kelas', 'id_mapel', 'id_guru', 'hari', 'jam_mulai', 'jam_selesai'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_kelas', 'id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_guru', 'id');
    }
}
