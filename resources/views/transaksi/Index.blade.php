
@extends('layouts.app')

@section('content')

<div class="content-header">
    <div>
        <h2>Transaksi Penjualan</h2>
        <p>Daftar transaksi penjualan minimarket.</p>
    </div>
</div>

<div class="table-card">

    <h3>Riwayat Transaksi</h3>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
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
                    <td colspan="4">Belum ada transaksi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection
