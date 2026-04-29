@extends('layouts.dashboard')

@section('title', 'Tambah Koleksi')

@section('content')
    <div class="dashboard-header">
        <h1>Tambah Koleksi Baru</h1>
    </div>

    <div class="form-card">
        <form action="{{ route('dashboard.koleksi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nama">Nama Koleksi</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan nama koleksi" required>
                @error('nama')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jenis">Jenis</label>
                <select name="jenis" id="jenis" required>
                    <option value="">Pilih Jenis</option>
                    <option value="Arca" {{ old('jenis') == 'Arca' ? 'selected' : '' }}>Arca</option>
                    <option value="Prasasti" {{ old('jenis') == 'Prasasti' ? 'selected' : '' }}>Prasasti</option>
                    <option value="Perhiasan" {{ old('jenis') == 'Perhiasan' ? 'selected' : '' }}>Perhiasan</option>
                    <option value="Keramik" {{ old('jenis') == 'Keramik' ? 'selected' : '' }}>Keramik</option>
                    <option value="Alat" {{ old('jenis') == 'Alat' ? 'selected' : '' }}>Alat</option>
                    <option value="Lainnya" {{ old('jenis') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
                @error('jenis')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="bahan">Bahan</label>
                <select name="bahan" id="bahan" required>
                    <option value="">Pilih Bahan</option>
                    <option value="Batu" {{ old('bahan') == 'Batu' ? 'selected' : '' }}>Batu</option>
                    <option value="Perunggu" {{ old('bahan') == 'Perunggu' ? 'selected' : '' }}>Perunggu</option>
                    <option value="Tanah Liat" {{ old('bahan') == 'Tanah Liat' ? 'selected' : '' }}>Tanah Liat</option>
                    <option value="Kayu" {{ old('bahan') == 'Kayu' ? 'selected' : '' }}>Kayu</option>
                    <option value="Logam" {{ old('bahan') == 'Logam' ? 'selected' : '' }}>Logam</option>
                    <option value="Lainnya" {{ old('bahan') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
                @error('bahan')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi koleksi" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" accept="image/*">
                @error('gambar')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('dashboard.koleksi.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
