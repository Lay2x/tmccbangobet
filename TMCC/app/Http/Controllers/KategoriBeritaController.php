<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kategori Berita';
        $kategori_berita = KategoriBerita::all();
        return view('kategori_berita.index', compact('kategori_berita', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Berita';
        return view('kategori_berita.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_berita' => 'required'
        ]);
        KategoriBerita::create($request->all());
        return redirect()->route('kategori_berita.index')->with('Sukses', 'Berhasil Tambah Kategori Berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori_berita = KategoriBerita::find($id);
        $title = 'Edit Kategori Berta';
        return view('kategori_berita.edit', compact('title', 'kategori_berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriBerita $kategori_berita)
    {
        $update = [
            'nama_kategori_berita' => $request->nama_kategori_berita
        ];
        $kategori_berita->update($update);
        return redirect()->route('kategori_berita.index')->with('Sukses', 'Berhasil Edit Kategori Berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriBerita $kategori_berita)
    {
        $kategori_berita->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kategori Berita');
    }
}
