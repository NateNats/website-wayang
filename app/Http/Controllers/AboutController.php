<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        return view('core.about');
    }
}
