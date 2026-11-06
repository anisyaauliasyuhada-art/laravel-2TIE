<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan seluruh data pelanggan
    public function index()
    {
        $dataUser = Pelanggan::all();

        return view('admin.user.index', compact('dataUser'));
    }

    // Menampilkan halaman tambah pelanggan
    public function create()
    {
        return view('admin.user.create');
    }

    // Menyimpan data pelanggan
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:pelanggan,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Pelanggan::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil ditambahkan.');
    }

    // Menampilkan detail pelanggan
    public function show(string $id)
    {
        $dataUser = Pelanggan::findOrFail($id);

        return view('admin.user.show', compact('dataUser'));
    }

    // Menampilkan halaman edit pelanggan
    public function edit(string $id)
    {
        $dataUser = Pelanggan::findOrFail($id);

        return view('admin.user.edit', compact('dataUser'));
    }

    // Memperbarui data pelanggan
    public function update(Request $request, string $id)
    {
        $dataUser = Pelanggan::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:pelanggan,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $dataUser->update($data);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil diperbarui.');
    }

    // Menghapus data pelanggan
    public function destroy(string $id)
    {
        $dataUser = Pelanggan::findOrFail($id);

        $dataUser->delete();

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil dihapus.');
    }
}
