<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = 'presensis'; 
    protected $fillable = ['id_siswa', 'id_mapel', 'status','created_at', 'updated_at'];

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
}