<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }
        .container {
            background: white;
            max-width: 550px;
            padding: 25px;
            margin: auto;
            border-radius: 10px;
        }
        input, select {
            width: 100%;
            padding: 11px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }
        button {
            background: #198754;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
        }
        .error { color: red; }
    </style>
</head>
<body>

<div class="container">

    <h2>Tambah Barang Minimarket</h2>

    @if($errors->any())
        <ul class="error">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf

        <label>Kode Barang</label>
        <input type="text" name="kode_barang"
               value="{{ old('kode_barang') }}" required>

        <label>Nama Barang</label>
        <input type="text" name="nama_barang"
               value="{{ old('nama_barang') }}" required>

        <label>Kategori</label>
        <select name="kategori_id" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}">
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select>

        <label>Harga Beli</label>
        <input type="number" name="harga_beli"
               value="{{ old('harga_beli') }}" required>

        <label>Harga Jual</label>
        <input type="number" name="harga_jual"
               value="{{ old('harga_jual') }}" required>

        <label>Stok</label>
        <input type="number" name="stok"
               value="{{ old('stok') }}" required>

        <label>Satuan</label>
        <input type="text" name="satuan"
               placeholder="Contoh: Pcs, Botol, Dus" required>

        <button type="submit">Simpan Barang</button>
        <a href="{{ route('barang.index') }}">Batal</a>

    </form>
</div>

</body>
</html>