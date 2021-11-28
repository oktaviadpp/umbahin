<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    use HasFactory;
    protected $table = "pelanggans";
    protected  $fillable = [
        'nama',
        'username',
        'email',
        'no_hp',
        'alamat',
        'jk',
        'password',
    ];
    protected $hidden = [
        'password',
    ];

    public function pelanggans()
    {
        return $this->hasMany(TransaksiModel::class,);
    }
}
