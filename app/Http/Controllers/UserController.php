<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaundryKatModel;
use App\Models\AboutModel;
use App\Models\TestimoniModel;

class UserController extends Controller
{
    public function index()
    {
        $laundrykat = LaundryKatModel::get();
        $about = AboutModel::whereIn('id', array(1, 3, 4))->get();
        $testimoni = TestimoniModel::with('kategori')->get();
        // $slides = Slide::all();
        // $sosialmedia = Sosialmedia::all();
        // $videos = Video::all();

        return view('user.index', [
            'laundrykats' => $laundrykat,
            'about_us' => $about,
            'testimonis' => $testimoni,
            // 'slides' => $slides,
            // 'sosialmedia' => $sosialmedia,
            // 'videos' => $videos
        ]);
    }
}
