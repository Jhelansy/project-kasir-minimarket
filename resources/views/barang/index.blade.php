<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang Minimarket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }
        h1 { color: #243447; }
        .tambah {
            display: inline-block;
            background: #198754;
            color: white;
            padding: 12px 18px;
            text-decoration: none;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background: #243447;
            color: white;
        }
        button {
            padding: 7px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .edit { background: #ffc107; }
        .hapus { background: #dc3545; color: white; }
        .pesan { color: green; }
    </style>
</head>
<body>

<h1>Data Barang Minimarket</h1>

<a href="{{ route('barang.create') }}" class="tambah">
    + Tambah Barang
</a>

@if(session('success'))
    <p class="pesan">{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Satuan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($barangs as $barang)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->kategori_id }}</td>
            <td>Rp {{ number_format($barang->harga_beli, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->satuan }}</td>
            <td>
                <a href="{{ route('barang.edit', $barang->id) }}">
                    <button class="edit">Edit</button>
                </a>

                <
<form action="{{ route('barang.destroy', $barang->id) }}"
      method="POST"
      style="display:inline">
    @csrf
    @method('DELETE')

    <button class="hapus"
        onclick="return confirm('Yakin ingin menghapus barang ini?')">
        Hapus
    </button>
</form>

            </td>
        </tr>
        @empty
        <tr>
            <td colspan="9">Belum ada data barang.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<br>
<a href="/dashboard">Kembali ke Dashboard</a>

</body>
</html>