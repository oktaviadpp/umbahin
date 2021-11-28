<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapModel extends Model
{
    use HasFactory;
    protected $table = "rekaps";
    protected $fillable = ["id_transaksi", "bulan", "pemasukan", "pengeluaran", "total"];

    public function rekap()
    {
        return $this->belongsTo(TransaksiModel::class, 'id_transaksi');
    }
}
