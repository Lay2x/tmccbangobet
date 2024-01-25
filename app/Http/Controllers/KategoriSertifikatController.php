<?php

namespace App\Http\Controllers;

use App\Models\KategoriSertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriSertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_sertifikat = DB::table('kategori_sertifikat')
        ->orderByDesc('id_kategori_sertifikat')
        ->get();
        $title = 'Data Kategori Sertifikat';
        return view('kategori_sertifikat.index', compact('title', 'kategori_sertifikat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Sertifikat';
        return view('kategori_sertifikat.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_sertifikat' => 'required',
            'poin' => 'required'
        ]);
        KategoriSertifikat::create($request->all());
        return redirect()->route('kategori_sertifikat.index')->with('Sukses', 'Berhasil Tambah Kategori Sertifikat');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriSertifikat $kategorisertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = 'Edit Kategori sertifikat';
        $kategori_sertifikat = DB::table('kategori_sertifikat')->where('id_kategori_sertifikat', $id)->first();  
        return view('kategori_sertifikat.edit', compact('kategori_sertifikat', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori_sertifikat = KategoriSertifikat::findorfail($id);
        $update = [
            'nama_kategori_sertifikat' => $request->nama_kategori_sertifikat,
            'poin' => $request->poin
        ];
        $kategori_sertifikat->update($update);
        return redirect()->route('kategori_sertifikat.index')->with('Sukses', 'Berhasil Edit Kategori Sertifikat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriSertifikat $kategori_sertifikat)
    {
        $kategori_sertifikat->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Data Kategori Sertifikat');
    }
}
