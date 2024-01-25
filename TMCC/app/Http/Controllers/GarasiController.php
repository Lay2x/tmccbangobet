<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriGarasi;
use App\Models\Garasi;

class GarasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $garasi = DB::table('isi_garasi')
            ->join('kategori_garasi', 'isi_garasi.id_item', 'kategori_garasi.id_garasi')
            ->get();
        return view('garasi.index', [
            'title' => 'Data Garasi',
            'data' => $garasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $garasi = KategoriGarasi::all();
        return view('garasi.create', [
            'title' => 'Data isi garasi',
            'data' => $garasi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi inputan
        $validatedData = $request->validate([
            'merek_item' => 'required',
            'jenis_item' => 'required',
            'foto_item' => 'image|file|max:1024'
        ]);

        // upload file
        $file = $request->file('foto_item');
        $namafile = 'garasi' . date('Ymdhis') . '.' . $request->file('foto_item')->getClientOriginalExtension();
        $file->move('file/garasi/', $namafile);

        // insert ke database
        $isi_garasi = new Garasi();
        $isi_garasi->id_item = $request->jenis_item;
        $isi_garasi->merek_item = $request->merek_item;
        $isi_garasi->jenis_item = $request->jenis_item;
        $isi_garasi->gambar = $namafile;
        $isi_garasi->save();
        return redirect('garasi')->with('tambah', 'Data Berhasil ditambahkan');
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
        return view('garasi.edit', [
            'title' => 'Ubah Data Garasi',
            'isiGarasi' => $isiGarasi,
            'kategoriGarasi' => $kategoriGarasi
        ]);
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
        DB::table('isi_garasi')->where('id', '=', $id)->delete();
        return redirect('garasi')->with('hapus', 'Data Berhasil dihapus');
    }
}
