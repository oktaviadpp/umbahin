<?php

namespace App\Models;

use App\Http\Controllers\PickupController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    use HasFactory;
    protected $table = "transaksis";
    protected  $fillable = [
        'id_pelanggan',
        'id_kategori',
        'id_pickup',
        'kode_transaksi',
        'jarak',
        'berat',
        'total',
        'uang_dp',
        'sisa',
        'tgl_msk',
        'tgl_selesai',
        'tgl_pelunasan',
        'status'
    ];


    public function pelanggan()
    {
        return $this->belongsTo(PelangganModel::class, 'id_pelanggan');
    }
    public function laundrykat()
    {
        return $this->belongsTo(LaundryKatModel::class, 'id_kategori');
    }
    public function pickup()
    {
        return $this->belongsTo(PickupModel::class, 'id_pickup');
    }

    public function rekaps()
    {
        return $this->hasMany(RekapModel::class);
    }
}
