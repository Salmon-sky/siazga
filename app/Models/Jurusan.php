<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';
    protected $fillable = ['nama','kelas'];

    public function JadwalPelajaran()
    {
        return $this->hasMany(JadwalPelajaran::class);
    }
    public function Siswa()
    {
        return $this->hasMany(User::class);
    }
}