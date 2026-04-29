<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardKoleksiController extends Controller
{
    public function index()
    {
        $koleksis = Koleksi::latest()->paginate(10);
        return view('dashboard.koleksi.index', compact('koleksis'));
    }

    public function create()
    {
        return view('dashboard.koleksi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'bahan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('koleksi', 'public');
        }

        Koleksi::create($validated);

        return redirect()->route('dashboard.koleksi.index')
            ->with('success', 'Koleksi berhasil ditambahkan!');
    }

    public function edit(Koleksi $koleksi)
    {
        return view('dashboard.koleksi.edit', compact('koleksi'));
    }

    public function update(Request $request, Koleksi $koleksi)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'bahan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($koleksi->gambar) {
                Storage::disk('public')->delete($koleksi->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('koleksi', 'public');
        }

        $koleksi->update($validated);

        return redirect()->route('dashboard.koleksi.index')
            ->with('success', 'Koleksi berhasil diperbarui!');
    }

    public function destroy(Koleksi $koleksi)
    {
        if ($koleksi->gambar) {
            Storage::disk('public')->delete($koleksi->gambar);
        }

        $koleksi->delete();

        return redirect()->route('dashboard.koleksi.index')
            ->with('success', 'Koleksi berhasil dihapus!');
    }
}
