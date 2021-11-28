<?php

namespace App\Http\Controllers;

use App\Models\LaundryKatModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LaundryKatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laundrykat = LaundryKatModel::get();

        return view('laundrykat.index', [
            'laundrykats' => $laundrykat,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laundrykat.create');
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
            'kategori' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
            'cuplikan' => 'required',
            'deskripsi' => 'required',
        ]);

        $gambar = time() . '-' . $request->gambar->getClientOriginalName();
        $request->gambar->move('gambar', $gambar);

        $laundrykat = LaundryKatModel::create([
            'nama_kategori' => $request->kategori,
            'harga' => $request->harga,
            'durasi' => $request->durasi,
            'gambar' => $gambar,
            'cuplikan' => $request->cuplikan,
            'deskripsi' => $request->deskripsi
        ]);

        // FLASH MESSAGE
        return redirect('/laundrykat')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaundryKatModel  $laundryKatModel
     * @return \Illuminate\Http\Response
     */
    public function show(LaundryKatModel $laundrykat)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaundryKatModel  $laundryKatModel
     * @return \Illuminate\Http\Response
     */
    public function edit(LaundryKatModel $laundrykat)
    {
        return view('laundrykat.edit', compact('laundrykat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaundryKatModel  $laundryKatModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaundryKatModel $laundrykat)
    {
        $this->validate($request, [
            'kategori' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
            'cuplikan' => 'required',
            'deskripsi' => 'required',
        ]);

        $laundrykat = LaundryKatModel::findOrFail($laundrykat->id);
        if ($request->file('gambar') == "") {

            $laundrykat->update([
                'nama_kategori' => $request->kategori,
                'harga' => $request->harga,
                'durasi' => $request->durasi,
                'cuplikan' => $request->cuplikan,
                'deskripsi' => $request->deskripsi
            ]);
        } else {

            File::delete('gambar/' . $laundrykat->gambar);

            $gambar = time() . '-' . $request->gambar->getClientOriginalName();
            $request->gambar->move('gambar', $gambar);
            $laundrykat['gambar'] = $gambar;

            $laundrykat->update([
                'nama_kategori' => $request->kategori,
                'harga' => $request->harga,
                'durasi' => $request->durasi,
                'cuplikan' => $request->cuplikan,
                'deskripsi' => $request->deskripsi
            ]);
        }
        // FLASH MESSAGE
        return redirect('/laundrykat')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaundryKatModel  $laundryKatModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laundrykats = LaundryKatModel::findOrFail($id);
        File::delete('gambar/' . $laundrykats->gambar);
        $laundrykats->delete();

        // FLASH MESSAGE
        return redirect('/laundrykat')->with('message', 'Data Berhasil Dihapus');
    }
}
