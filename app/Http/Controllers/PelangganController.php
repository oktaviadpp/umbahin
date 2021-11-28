<?php

namespace App\Http\Controllers;

use App\Models\PelangganModel;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = PelangganModel::get();

        return view('pelanggan.index', [
            'pelanggans' => $pelanggan,
        ]);
    }
}
