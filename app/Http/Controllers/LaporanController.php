<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaksi::query();

        if ($request->filled('tanggal_mulai')) {
            $query->whereDate('tanggal', '>=', $request->tanggal_mulai);
        }

        if ($request->filled('tanggal_akhir')) {
            $query->whereDate('tanggal', '<=', $request->tanggal_akhir);
        }

        $transaksis = $query->latest('tanggal')->get();

        $totalPenjualan = $transaksis->sum('total_harga');
        $jumlahTransaksi = $transaksis->count();

        return view('laporan.index', compact(
            'transaksis',
            'totalPenjualan',
            'jumlahTransaksi'
        ));
    }
}
