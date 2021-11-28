<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use App\Models\PelangganModel;
use App\Models\LaundryKatModel;
use App\Models\PickupModel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = TransaksiModel::with('pelanggan', 'laundrykat', 'pickup')->get();

        return view('transaksi.index', [
            'transaksis' => $transaksi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = PelangganModel::all();
        $kategori = LaundryKatModel::all();
        $pickup = PickupModel::all();
        $transaksi = TransaksiModel::all();
        return view('transaksi.create', [
            'pelanggans' => $pelanggan,
            'laundrykats' => $kategori,
            'pickups' => $pickup,
            'transaksis' => $transaksi
        ]);
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
            'username' => 'required',
            'kategori' => 'required',
            'pickup' => 'required',
            'jarak' => 'required',
            'berat' => 'required',
            'dp' => 'required',
            // 'tgl_selesai' => 'required|date',
            'tgl_pelunasan' => 'required|date',
            'status' => 'required',
        ]);

        $transaksi = TransaksiModel::with('pelanggan', 'laundrykat', 'pickup')->get();

        foreach ($transaksi as $tran) {
            $kategori = LaundryKatModel::find($tran['id_kategori']);
            $pickup = PickupModel::find($tran['id_pickup']);
            $masuk = Carbon::now();

            $hargaKategori = $kategori->harga;
            $hargaPickup = $pickup->harga;
            // $tgl_selesai = Carbon::now()->addDay($kategori->durasi)->toDateString();

            $total = ($hargaKategori * $request['berat']) + ($hargaPickup * $request['jarak']);
            $sisa = $total - $request['dp'];
        }
        $transaksi = TransaksiModel::create([
            'id_pelanggan' => $request->username,
            'id_kategori' => $request->kategori,
            'id_pickup' => $request->pickup,
            'jarak' => $request->jarak,
            'berat' => $request->berat,
            'total' => $total,
            'sisa' => $sisa,
            'uang_dp' => $request->dp,
            'tgl_msk' => $masuk,
            // 'tgl_selesai' => $tgl_selesai,
            'tgl_pelunasan' => $request->tgl_pelunasan,
            'status' => $request->status,
        ]);
        // FLASH MESSAGE
        return redirect('/transaksi')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiModel $transaksiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiModel $transaksi)
    {
        $pelanggans = PelangganModel::all();
        $laundrykats = LaundryKatModel::all();
        $pickups = PickupModel::all();
        return view('transaksi.edit', compact('transaksi', 'pelanggans', 'laundrykats', 'pickups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiModel $transaksi)
    {
        $this->validate($request, [
            'username' => 'required',
            'kategori' => 'required',
            'pickup' => 'required',
            'jarak' => 'required',
            'berat' => 'required',
            'dp' => 'required',
            // 'tgl_selesai' => 'required|date',
            'tgl_pelunasan' => 'required|date',
            'status' => 'required',
        ]);
        $transaksi = TransaksiModel::findOrFail($transaksi->id);
        $transaksis = TransaksiModel::with('pelanggan', 'laundrykat', 'pickup')->get();

        foreach ($transaksis as $tran) {
            $kategori = LaundryKatModel::find($tran['id_kategori']);
            $pickup = PickupModel::find($tran['id_pickup']);
            $masuk = Carbon::now();

            $hargaKategori = $kategori->harga;
            $hargaPickup = $pickup->harga;
            // $tgl_selesai = Carbon::now()->addDay($kategori->durasi)->toDateString();

            $total = ($hargaKategori * $request['berat']) + ($hargaPickup * $request['jarak']);
            $sisa = $total - $request['dp'];
        }
        $transaksi->update([
            'id_pelanggan' => $request->username,
            'id_kategori' => $request->kategori,
            'id_pickup' => $request->pickup,
            'jarak' => $request->jarak,
            'berat' => $request->berat,
            'total' => $total,
            'sisa' => $sisa,
            'uang_dp' => $request->dp,
            'tgl_msk' => $masuk,
            // 'tgl_selesai' => $tgl_selesai,
            'tgl_pelunasan' => $request->tgl_pelunasan,
            'status' => $request->status,
        ]);
        // FLASH MESSAGE
        return redirect('/transaksi')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = TransaksiModel::findOrFail($id);
        $transaksi->delete();

        // FLASH MESSAGE
        return redirect('/transaksi')->with('message', 'Data Berhasil Dihapus');
    }
}
