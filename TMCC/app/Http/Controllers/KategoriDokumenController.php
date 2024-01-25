<?php

namespace App\Http\Controllers;

use App\Models\KategoriDokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_dokumen = DB::table('kategori_dokumen')
        ->orderByDesc('id_kategori_dokumen')
        ->get();
        $title = 'Data Kategori Dokumen';
        return view('kategori_dokumen.index', compact('title', 'kategori_dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Dokumen';
        return view('kategori_dokumen.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_dokumen' => 'required'
        ]);
        KategoriDokumen::create($request->all());
        return redirect()->route('kategori_dokumen.index')->with('Sukses', 'Berhasil Tambah Kategori Dokumen');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriDokumen $kategoriDokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = 'Edit Kategori Dokumen';
        $kategori_dokumen = DB::table('kategori_dokumen')->where('id_kategori_dokumen', $id)->first();  
        return view('kategori_dokumen.edit', compact('kategori_dokumen', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori_dokumen = KategoriDokumen::findorfail($id);
        $update = [
            'nama_kategori_dokumen' => $request->nama_kategori_dokumen
        ];
        $kategori_dokumen->update($update);
        return redirect()->route('kategori_dokumen.index')->with('Sukses', 'Berhasil Edit Kategori Dokumen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriDokumen $kategori_dokumen)
    {
        $kategori_dokumen->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Data Kategori Dokumen');
    }
}
