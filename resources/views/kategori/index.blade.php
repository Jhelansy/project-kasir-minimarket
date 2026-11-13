
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kategori</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h2 {
            color: #333;
        }

        .tambah {
            display: inline-block;
            background: #198754;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #0d6efd;
            color: white;
        }

        .edit {
            background: orange;
            color: white;
            padding: 7px;
            text-decoration: none;
        }

        .hapus {
            background: red;
            color: white;
            padding: 7px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Data Kategori Barang</h2>
    <a href="/dashboard" class="btn-dashboard">
    ← Kembali ke Dashboard
</a>

    @if(session('success'))
        <p style="color:green">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('kategori.create') }}" class="tambah">
        + Tambah Kategori
    </a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($kategoris as $kategori)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>{{ $kategori->keterangan }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $kategori->id) }}"
                           class="edit">Edit</a>

                        <form action="{{ route('kategori.destroy', $kategori->id) }}"
                              method="POST"
                              style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button class="hapus"
                                onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data kategori.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>
