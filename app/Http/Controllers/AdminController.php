<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiModel;
use App\Models\RekapModel;

class AdminController extends Controller
{
    public function index()
    {
        $rekap = RekapModel::get();
        //Menyimpan data utk chart
        $categories = [];
        $data = [];
        foreach ($rekap as $rek) {
            $categories[] = $rek->bulan;
            $data[] = $rek->total;
        }
        return view('admin.index', ['categories' => $categories, 'data' => $data]);
    }
}
