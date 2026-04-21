<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index(Request $request)
    {
        $query = Koleksi::query();

        if ($request->filled('jenis')) {
            $query->where('jenis', $request->jenis);
        }

        if ($request->filled('bahan')) {
            $query->where('bahan', $request->bahan);
        }

        if ($request->filled('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama', 'ilike', '%' . $request->q . '%')
                  ->orWhere('deskripsi', 'ilike', '%' . $request->q . '%');
            });
        }

        $koleksis = $query->latest()->paginate(8)->withQueryString();

        // Get distinct values for filter dropdowns
        $jenisList = Koleksi::distinct()->pluck('jenis')->filter()->sort()->values();
        $bahanList = Koleksi::distinct()->pluck('bahan')->filter()->sort()->values();

        return view('koleksi.wayang', compact('koleksis', 'jenisList', 'bahanList'));
    }
}
