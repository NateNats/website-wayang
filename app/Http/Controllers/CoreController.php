<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }
}
