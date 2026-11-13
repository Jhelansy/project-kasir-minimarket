
@extends('layouts.app')

@section('content')

<div class="content-header">
    <div>
        <h2>Laporan Penjualan</h2>
        <p>Rekap data penjualan minimarket.</p>
    </div>

    <a href="/dashboard" class="btn-dashboard">
        Kembali ke Dashboard
    </a>
</div>

<div class="table-card">

    <h3>Filter Tanggal</h3>

    <form action="{{ route('laporan.index') }}" method="GET">

        <label>Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai"
            value="{{ request('tanggal_mulai') }}">

        <label>Tanggal Akhir</label>
        <input type="date" name="tanggal_akhir"
            value="{{ request('tanggal_akhir') }}">

        <button type="submit" class="btn-primary">
            Tampilkan Laporan
        </button>

        <a href="{{ route('laporan.index') }}" class="btn-edit">
            Reset
        </a>

    </form>

    <br>

    <h3>Ringkasan Penjualan</h3>

    <p>Jumlah Transaksi:
        <strong>{{ $jumlahTransaksi }}</strong>
    </p>

    <p>Total Penjualan:
        <strong>
            Rp {{ number_format($totalPenjualan, 0, ',', '.') }}
        </strong>
    </p>

    <br>

    <h3>Data Penjualan</h3>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Tanggal</th>
                <th>Total Penjualan</th>
            </tr>
        </thead>

        <tbody>
            @forelse($transaksis as $transaksi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaksi->kode_transaksi }}</td>
                    <td>{{ $transaksi->tanggal }}</td>
                    <td>
                        Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        Belum ada data penjualan.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <br>

    <button onclick="window.print()" class="btn-primary">
        Cetak Laporan
    </button>

</div>

@endsection
