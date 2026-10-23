<?php
namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataPelanggan'] = Pelanggan::all();
		return view('admin.pelanggan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nama'   => 'required|string|max:255',
            'email'  => 'required|email|unique:pelanggans,email',
            'alamat' => 'nullable|string|max:255',
            'no_hp'  => 'nullable|string|max:20',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
