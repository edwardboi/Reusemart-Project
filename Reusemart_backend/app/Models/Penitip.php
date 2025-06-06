<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Penitip extends Model
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;
    public $table = 'penitip';
    protected $primaryKey = 'id_penitip';

    protected $fillable = [
        'id_penitip',
        'nama_penitip',
        'rating_penitip',
        'saldo_penitip',
        'poin_penitip',
        'no_ktp',
        'email',
        'password',
        'is_top'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_penitip');
    }

    public function diskusi(){
        return $this->hasMany(Diskusi::class, 'id_penitip');
    }

    public function penitipan(){
        return $this->hasMany(Penitipan::class, 'id_penitip');
    }
}
