
@extends('layouts.app')

@section('content')

<div class="content-header">
    <div>
        <h2>Data Kasir</h2>
        <p>Kelola data kasir minimarket.</p>
    </div>

    <div class="header-actions">
        <a href="/dashboard" class="btn-dashboard">
            ← Kembali ke Dashboard
        </a>

        <a href="{{ route('kasir.create') }}" class="btn-primary">
            + Tambah Kasir
        </a>
    </div>
</div>

@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="table-card">
    <h3>Daftar Kasir</h3>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kasir</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($kasirs as $kasir)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kasir->nama_kasir }}</td>
                    <td>{{ $kasir->username }}</td>
                    <td>{{ $kasir->alamat }}</td>
                    <td>{{ $kasir->no_hp }}</td>
                    <td>
                        <a href="{{ route('kasir.edit', $kasir->id) }}"
                           class="btn-edit">Edit</a>

                        <form action="{{ route('kasir.destroy', $kasir->id) }}"
                              method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn-delete"
                                    onclick="return confirm('Yakin ingin menghapus kasir ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data kasir.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
