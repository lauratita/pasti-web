<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OrangTua extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_orangtua';
    protected $primaryKey = 'id_ortu';
    protected $fillable = [
        'nik_ortu',
        'nama_ortu',
        'alamat_ortu',
        'no_hp_ortu',
        'jk_ortu',
        'email',
        'password',
    ];

    protected $hidden = ['password'];
}
