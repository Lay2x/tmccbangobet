<?php

namespace App\Http\Controllers;

use App\Models\KategoriPengurus;
use Illuminate\Http\Request;

class KategoriPengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kategori Pengurus';
        $kategori_pengurus = KategoriPengurus::all();
        return view('kategori_pengurus.index', compact('title', 'kategori_pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Pengurus';
        return view('kategori_pengurus.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_pengurus' => 'required',
        ]);
        KategoriPengurus::create($request->all());
        return redirect()->route('kategori_pengurus.index')->with('Sukses', 'Berhasil Tambah ');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriPengurus $kategoriPengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori_pengurus = KategoriPengurus::find($id);
        $title = 'Edit Kategori Pengurus';
        return view('kategori_pengurus.edit', compact('title', 'kategori_pengurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori_pengurus = KategoriPengurus::findorfail($id);
        $update = [
            'nama_kategori_pengurus' => $request->nama_kategori_pengurus,
        ];
        $kategori_pengurus->update($update);
        return redirect()->route('kategori_pengurus.index')->with('Sukses', 'Berhasil Edit Kategori Pengurus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori_pengurus = KategoriPengurus::find($id);
        $kategori_pengurus->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kategori Pengurus');
    }
}
