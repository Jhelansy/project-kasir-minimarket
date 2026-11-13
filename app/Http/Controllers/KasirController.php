<?php
namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KasirController extends Controller
{
    public function index()
    {
        $kasirs = Kasir::all();

        return view('kasir.index', compact('kasirs'));
    }

    public function create()
    {
        return view('kasir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kasir' => 'required',
            'username' => 'required|unique:kasirs,username',
            'password' => 'required|min:6',
            'alamat' => 'nullable',
            'no_hp' => 'nullable'
        ]);

        Kasir::create([
            'nama_kasir' => $request->nama_kasir,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return redirect()->route('kasir.index')
            ->with('success', 'Kasir berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kasir = Kasir::findOrFail($id);

        return view('kasir.edit', compact('kasir'));
    }

    public function update(Request $request, $id)
    {
        $kasir = Kasir::findOrFail($id);

        $request->validate([
            'nama_kasir' => 'required',
            'username' => 'required|unique:kasirs,username,' . $id,
            'password' => 'nullable|min:6',
            'alamat' => 'nullable',
            'no_hp' => 'nullable'
        ]);

        $data = $request->only([
            'nama_kasir',
            'username',
            'alamat',
            'no_hp'
        ]);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $kasir->update($data);

        return redirect()->route('kasir.index')
            ->with('success', 'Data kasir berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();

        return redirect()->route('kasir.index')
            ->with('success', 'Data kasir berhasil dihapus!');
    }
}
