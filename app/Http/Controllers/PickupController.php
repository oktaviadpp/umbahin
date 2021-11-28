<?php

namespace App\Http\Controllers;

use App\Models\PickupModel;
use Illuminate\Http\Request;

class PickupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pickup = PickupModel::get();

        return view('pickup.index', [
            'pickups' => $pickup,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pickup.create');
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
            'nama' => 'required',
            'harga' => 'required',
        ]);

        $pickup = PickupModel::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);

        // FLASH MESSAGE
        return redirect('/pickup')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PickupModel  $pickupModel
     * @return \Illuminate\Http\Response
     */
    public function show(PickupModel $pickupModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PickupModel  $pickupModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PickupModel $pickup)
    {
        return view('pickup.edit', compact('pickup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PickupModel  $pickupModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PickupModel $pickup)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
        ]);

        $pickup = PickupModel::findOrFail($pickup->id);

        $pickup->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);

        // FLASH MESSAGE
        return redirect('/pickup')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PickupModel  $pickupModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pickup = PickupModel::findOrFail($id);
        $pickup->delete();

        // FLASH MESSAGE
        return redirect('/pickup')->with('message', 'Data Berhasil Dihapus');
    }
}
