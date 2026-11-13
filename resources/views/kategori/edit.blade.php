
@extends('layouts.app')

@section('content')

<div class="content-header">
    <div>
        <h2>Edit Kategori Barang</h2>
        <p>Perbarui informasi kategori barang.</p>
    </div>
</div>

<div class="table-card">

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Kategori</label><br>
        <input
            type="text"
            name="nama_kategori"
            value="{{ $kategori->nama_kategori }}"
            required
        >
        <br><br>

        <label>Keterangan</label><br>
        <textarea name="keterangan">{{ $kategori->keterangan }}</textarea>
        <br><br>

        <button type="submit" class="btn-primary">
            Simpan Perubahan
        </button>

        <a href="{{ route('kategori.index') }}" class="btn-edit">
            Kembali
        </a>
    </form>

</div>

@endsection
