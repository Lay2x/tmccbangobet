<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriGarasi;

class KategoriGarasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_garasi = KategoriGarasi::all();
        return view('kategori_garasi.index', [
            'title' => 'Data Kategori Garasi',
            'data' => $kategori_garasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori_garasi.create', [
            'title' => 'Tambah Kategori Kegiatan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merek_item' => 'required|unique:kategori_garasi',
            'jenis_item' => 'required'
        ]);

        KategoriGarasi::create($request->all());
        return redirect('kategori_garasi')->with('tambah', 'Data Garasi Berhasil ditambahkan!');
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
        $data = DB::table('kategori_garasi')->where('id_garasi', '=',  $id)->get();
        return view('kategori_garasi.edit', [
            'title' => 'Ubah Data Kategori Garasi',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'merek_item' => 'required|unique:kategori_garasi',
            'jenis_item' => 'required'
        ]);

        DB::table('kategori_garasi')->where('id_garasi', '=', $id)->update([
            'merek_item' => $request->merek_item,
            'jenis_item' => $request->jenis_item
        ]);
        return redirect('kategori_garasi')->with('ubah', 'Data Kategori Garasi Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_garasi')->where('id_garasi', '=', $id)->delete();
        return redirect()->back()->with('hapus', 'Data Kategori Garasi Berhasil dihapus!');
    }
}
