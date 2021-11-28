<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupModel extends Model
{
    use HasFactory;
    protected $table = "pickups";
    protected  $fillable = [
        'nama', 'harga'
    ];


    public function pickups()
    {
        return $this->hasMany(TransaksiModel::class);
    }
}
