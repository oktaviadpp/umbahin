<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniModel extends Model
{
    use HasFactory;
    protected $table = "testimonis";
    protected $fillable = ['id_kategori', 'gambar'];

    public function kategori()
    {
        return $this->belongsTo(LaundryKatModel::class, 'id_kategori');
    }
}
