<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
</head>
<body style="font-family:Arial;background:#f4f6f9;padding:30px">

<div style="background:white;padding:25px;max-width:550px;margin:auto">

    <h2>Edit Data Barang</h2>

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('barang.update', $barang->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <label>Kode Barang</label><br>
        <input type="text" name="kode_barang"
            value="{{ old('kode_barang', $barang->kode_barang) }}"
            required><br><br>

        <label>Nama Barang</label><br>
        <input type="text" name="nama_barang"
            value="{{ old('nama_barang', $barang->nama_barang) }}"
            required><br><br>

        <label>Kategori</label><br>
        <select name="kategori_id" required>
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}"
                    {{ $barang->kategori_id == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select><br><br>

        <label>Harga Beli</label><br>
        <input type="number" name="harga_beli"
            value="{{ old('harga_beli', $barang->harga_beli) }}"
            required><br><br>

        <label>Harga Jual</label><br>
        <input type="number" name="harga_jual"
            value="{{ old('harga_jual', $barang->harga_jual) }}"
            required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok"
            value="{{ old('stok', $barang->stok) }}"
            required><br><br>

        <label>Satuan</label><br>
        <input type="text" name="satuan"
            value="{{ old('satuan', $barang->satuan) }}"
            required><br><br>

        <button type="submit">Update Barang</button>

        <a href="{{ route('barang.index') }}">Kembali</a>

    </form>
</div>

</body>
</html>