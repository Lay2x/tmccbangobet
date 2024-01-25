<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kategori Produk';
        $kategori_produk = KategoriProduk::all();
        return view('kategori_produk.index', compact('title', 'kategori_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Produk';
        return view('kategori_produk.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_produk'
        ]);
        KategoriProduk::create($request->all());
        return redirect()->route('kategori_produk.index')->with('Sukses', 'Berhasil Tambah Kategori Produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriProduk $kategoriProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriProduk $kategori_produk)
    {
        $title = 'Edit Kategori Produk';
        return view('kategori_produk.edit', compact('title', 'kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriProduk $kategori_produk)
    {
        $update = [
            'nama_kategori_produk' => $request->nama_kategori_produk
        ];
        $kategori_produk->update($update);
        return redirect()->route('kategori_produk.index')->with('Sukses', 'Berhasil Edit Kategori Produk'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriProduk $kategori_produk)
    {
        $kategori_produk->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kategori Produk');
    }
}
