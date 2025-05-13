<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table    = 'mapel';
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
        return $this->belongsToMany(User::class, 'guru_mapels', 'id_mapel', 'id_guru');
    }
}
