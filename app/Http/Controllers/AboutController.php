<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = AboutModel::get();

        return view('about.index', [
            'about_us' => $about,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
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
            'bab' => 'required',
            'isi' => 'required',
            'judul' => 'required',
        ]);

        $about = AboutModel::create([
            'bab' => $request->bab,
            'isi' => $request->isi,
            'judul' => $request->judul
        ]);

        // FLASH MESSAGE
        return redirect('/about')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutModel  $aboutModel
     * @return \Illuminate\Http\Response
     */
    public function show(AboutModel $aboutModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutModel  $aboutModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutModel $about)
    {
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutModel  $aboutModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutModel $about)
    {
        $this->validate($request, [
            'bab' => 'required',
            'isi' => 'required',
            'judul' => 'required',
        ]);

        $about = AboutModel::findOrFail($about->id);

        $about->update([
            'bab' => $request->bab,
            'isi' => $request->isi,
            'judul' => $request->judul
        ]);

        // FLASH MESSAGE
        return redirect('/about')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutModel  $aboutModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about =  AboutModel::findOrFail($id);
        $about->delete();

        // FLASH MESSAGE
        return redirect('/about')->with('message', 'Data Berhasil Dihapus');
    }
}
