
@extends('layouts.app')

@section('content')

<div class="content-header">
    <div>
        <h2>Tambah Kategori Barang</h2>
        <p>Masukkan kategori barang baru.</p>
    </div>
</div>

<div class="table-card">

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf

        <label>Nama Kategori</label><br>
        <input
            type="text"
            name="nama_kategori"
            placeholder="Contoh: Makanan"
            required
        >
        <br><br>

        <label>Keterangan</label><br>
        <textarea
            name="keterangan"
            placeholder="Masukkan keterangan kategori"
        ></textarea>
        <br><br>

        <button type="submit" class="btn-primary">
            Simpan Kategori
        </button>

        <a href="{{ route('kategori.index') }}" class="btn-edit">
            Kembali
        </a>
    </form>

</div>

@endsection
