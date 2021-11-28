<?php

namespace App\Http\Controllers;

use App\Models\TestimoniModel;
use App\Models\LaundryKatModel;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = TestimoniModel::with('kategori')->get();

        return view('testimoni.index', [
            'testimonis' => $testimoni,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = LaundryKatModel::all();
        // $testimoni = TestimoniModel::all();
        return view('testimoni.create', [
            'laundrykats' => $kategori,
            // 'testimonis' => $testimoni
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
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $gambar = time() . '-' . $request->gambar->getClientOriginalName();
        $request->gambar->move('gambar', $gambar);

        $testimoni = TestimoniModel::create([
            'id_kategori' => $request->kategori,
            'gambar' => $gambar
        ]);

        // FLASH MESSAGE
        return redirect('/testimoni')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestimoniModel  $testimoniModel
     * @return \Illuminate\Http\Response
     */
    public function show(TestimoniModel $testimoniModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimoniModel  $testimoniModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TestimoniModel $testimoniModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimoniModel  $testimoniModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimoniModel $testimoniModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimoniModel  $testimoniModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimoniModel $testimoniModel)
    {
        //
    }
}
