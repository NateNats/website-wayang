<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        return view('core.kegiatan');
    }
}
