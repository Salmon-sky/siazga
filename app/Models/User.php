<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use  HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'nomor_induk',
        'id_kelas',
        'no_hp',
        'email',
        'password',
        'roles_id',
        'file_eraport',
        'file_sertifikat',
        'status',
        'is_active',
        'img',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function Nilai()
    {
        return $this->hasMany(Nilai::class);
    }
    public function JadwalPelajaran()
    {
        return $this->hasMany(JadwalPelajaran::class);
    }
    public function Jurusan()
    {
        return $this->hasMany(Jurusan::class);
    }
    public function Kelas()
    {
        return $this->belongsTo(Jurusan::class, 'id_kelas', 'id');
    }

    public function gurus()
    {
        return $this->belongsToMany(Mapel::class, 'guru_mapels', 'guru_id', 'mapel_id');
    }

    public function presensis()
    {
        return $this->hasMany(Presensi::class, 'id_siswa', 'id');
    }
}
