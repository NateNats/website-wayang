@extends('layouts.dashboard')

@section('title', 'Edit Koleksi')

@section('content')
    <div class="dashboard-header">
        <h1>Edit Koleksi</h1>
    </div>

    <div class="form-card">
        <form action="{{ route('dashboard.koleksi.update', $koleksi) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama Koleksi</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $koleksi->nama) }}" placeholder="Masukkan nama koleksi" required>
                @error('nama')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jenis">Jenis</label>
                <select name="jenis" id="jenis" required>
                    <option value="">Pilih Jenis</option>
                    @foreach(['Arca', 'Prasasti', 'Perhiasan', 'Keramik', 'Alat', 'Lainnya'] as $j)
                        <option value="{{ $j }}" {{ old('jenis', $koleksi->jenis) == $j ? 'selected' : '' }}>{{ $j }}</option>
                    @endforeach
                </select>
                @error('jenis')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="bahan">Bahan</label>
                <select name="bahan" id="bahan" required>
                    <option value="">Pilih Bahan</option>
                    @foreach(['Batu', 'Perunggu', 'Tanah Liat', 'Kayu', 'Logam', 'Lainnya'] as $b)
                        <option value="{{ $b }}" {{ old('bahan', $koleksi->bahan) == $b ? 'selected' : '' }}>{{ $b }}</option>
                    @endforeach
                </select>
                @error('bahan')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi koleksi" required>{{ old('deskripsi', $koleksi->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                @if($koleksi->gambar)
                    <img src="{{ asset('storage/' . $koleksi->gambar) }}" alt="{{ $koleksi->nama }}" class="current-img">
                    <small style="color:#64748b;display:block;margin-bottom:0.5rem;">Upload gambar baru untuk mengganti</small>
                @endif
                <input type="file" name="gambar" id="gambar" accept="image/*">
                @error('gambar')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('dashboard.koleksi.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
