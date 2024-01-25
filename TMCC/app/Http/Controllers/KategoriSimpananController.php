<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use App\Models\KategoriSimpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriSimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kategori Simpanan';
        $kategori_simpanan = DB::table('kategori_simpanan')
        ->orderByDesc('id_kategori_simpanan')
        ->get();
        return view('kategori_simpanan.index', compact('kategori_simpanan', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Simpanan';
        return view('kategori_simpanan.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_simpanan' => 'required'
        ]);
        KategoriSimpanan::create($request->all());
        return redirect()->route('kategori_simpanan.index')->with('Sukses', 'Berhasil Tambah Kategori Simpanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriSimpanan $kategoriSimpanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriSimpanan $kategori_simpanan)
    {
        $title = 'Edit Kategori Simpanan';
        return view('kategori_simpanan.edit', compact('title', 'kategori_simpanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriSimpanan $kategori_simpanan)
    {
        $update = [
            'nama_kategori_simpanan' => $request->nama_kategori_simpanan,
        ];
        $kategori_simpanan->update($update);
        return redirect()->route('kategori_simpanan.index')->with('Sukses', 'Berhasil Edit Kategori Simpanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriSimpanan $kategori_simpanan)
    {
        $kategori_simpanan->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Data Kategori Simpanan');
    }
}
