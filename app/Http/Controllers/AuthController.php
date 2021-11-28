<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganModel;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerform()
    {

        return view('user.register');
    }

    public function register(Request $request)
    {
        $validator = validator($request->all(), [
            'username' => ['required', 'string', 'max:255'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'no_hp' => ['required', 'integer'],
            'alamat' => ['required', 'string', 'max:255'],
            'jk' => ['required', 'string', 'max:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'repassword' => ['required,same:password']
        ]);

        if ($validator->fails()) {
            return $this->response($validator->errors(), 500);
        }

        // create user
        $request['password'] = Hash::make($request['password']);
        $pelanggan = PelangganModel::create($request->toArray());
        // $pelanggan = PelangganModel::create([
        //     'bab' => $request->bab,
        //     'isi' => $request->isi,
        //     'judul' => $request->judul
        // ]);

        return view('home');
    }
}
