<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryKatModel extends Model
{
    use HasFactory;
    protected $table = "laundrykats";
    protected  $fillable = [
        'nama_kategori', 'harga', 'durasi', 'gambar', 'cuplikan', 'deskripsi'
    ];


    public function laundrykats()
    {
        return $this->hasMany(TransaksiModel::class);
    }
    public function kategoris()
    {
        return $this->hasMany(TestimoniModel::class);
    }
}
