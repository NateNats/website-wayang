@extends('layouts.dashboard')

@section('title', 'Kelola Koleksi')

@section('content')
    <div class="dashboard-header-1">
        <div class="total">
            <div>
                <p>Total Koleksi: {{ $koleksis->total() }}</p>
            </div>
        </div>
    </div>

    <div class="dashboard-header">
        <h1>Kelola Koleksi</h1>
        <a href="{{ route('admin.create') }}" class="btn btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Tambah Koleksi
        </a>
    </div>

    <div class="table-container">
        @if($koleksis->count() > 0)
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Bahan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($koleksis as $index => $koleksi)
                        <tr>
                            <td>{{ $koleksis->firstItem() + $index }}</td>
                            <td>
                                @if($koleksi->gambar)
                                    <img src="{{ asset('storage/' . $koleksi->gambar) }}" alt="{{ $koleksi->nama }}" class="table-img">
                                @else
                                    <div class="table-img" style="display:flex;align-items:center;justify-content:center;color:#94a3b8;font-size:0.7rem;">No img</div>
                                @endif
                            </td>
                            <td><strong>{{ $koleksi->nama }}</strong></td>
                            <td>{{ $koleksi->jenis }}</td>
                            <td>{{ $koleksi->bahan }}</td>
                            <td>
                                <span style="background-color: #dcfce7; color: #166534; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem; font-weight: 500;">Aktif</span>
                            </td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ route('admin.edit', $koleksi) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.destroy', $koleksi) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus koleksi ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if($koleksis->hasPages())
                <div class="table-pagination">
                    {{ $koleksis->links() }}
                </div>
            @endif
        @else
            <div class="table-empty">
                <p>Belum ada koleksi. Klik "Tambah Koleksi" untuk menambahkan.</p>
            </div>
        @endif
    </div>
@endsection
