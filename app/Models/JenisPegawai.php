<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_jenispegawai';
    protected $primaryKey = 'id_jenispegawai';
    protected $fillable = ['nama'];
    public $timestamps = false;

    // Relationship with Pegawai model
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id_jenispegawai', 'id_jenispegawai');
    }
}
