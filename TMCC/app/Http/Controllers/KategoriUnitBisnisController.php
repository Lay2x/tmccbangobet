<?php

namespace App\Http\Controllers;

use App\Models\KategoriUnitBisnis;
use Illuminate\Http\Request;

class KategoriUnitBisnisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_unit_bisnis = KategoriUnitBisnis::all();
        $title = 'Kategori Unit Bisnis';
        return view('kategori_unit_bisnis.index', compact('kategori_unit_bisnis', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Unit Bisnis';
        return view('kategori_unit_bisnis.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_unit_bisnis' => 'required',
        ]);
        KategoriUnitBisnis::create($request->all());
        return redirect()->route('kategori_unit_bisnis.index')->with('Sukses', 'Berhasil Tambah Kategori Unit Bisnis');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriUnitBisnis $kategoriUnitBisnis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori_unit_bisnis = KategoriUnitBisnis::find($id);
        $title = 'Edit Kategori Unit Bisnis';
        return view('kategori_unit_bisnis.edit', compact('title', 'kategori_unit_bisnis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori_unit_bisnis = KategoriUnitBisnis::findorfail($id);
        $update = [
            'nama_kategori_unit_bisnis' => $request->nama_kategori_unit_bisnis,
        ];
        $kategori_unit_bisnis->update($update);
        return redirect()->route('kategori_unit_bisnis.index')->with('Sukses', 'Berhasil Edit Kategori Unit Bisnis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori_unit_bisnis = KategoriUnitBisnis::findorfail($id);
        $kategori_unit_bisnis->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kategori Unit Bisnis');
    }
}
