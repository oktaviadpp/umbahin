<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapModel;
use App\Models\TransaksiModel;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekap = RekapModel::with('rekap')->get();

        return view('rekap.index', [
            'rekaps' => $rekap,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bulan' => 'required',
            'pemasukan' => 'required',
            'pengeluaran' => 'required'
        ]);

        // $total = SELECT SUM(total) AS tot_tran FROM `transaksis` WHERE MONTH(tgl_pelunasan) =11;
        // $bulan = TransaksiModel::get(['tgl_pelunasan']);
        $total = TransaksiModel::whereMonth('tgl_pelunasan', '=', 10)->sum('total');
        // $total_tran = TransaksiModel::sum($total);
        $rekap = RekapModel::create([
            'bulan' => $request->bulan,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
            'total' => $total
        ]);
        // echo ($total);
        // FLASH MESSAGE
        return redirect('/rekap')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
