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
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];

    public function Arsip()
    {
        return $this->hasMany(Arsip::class);
    }
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


}