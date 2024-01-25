<?php

namespace App\Http\Controllers;

use App\Models\KategoriAnggota;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tagihan = DB::table('tagihan')
        ->join('kategori_anggota', 'tagihan.id_kategori_anggota', 'kategori_anggota.id_kategori_anggota')
        ->get();
        $title = 'Data Tagihan';
        return view('tagihan.index', compact('tagihan', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_anggota =KategoriAnggota::all();
        $title = 'Tambah Tagihan';
        return view('tagihan.create', compact('title', 'kategori_anggota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tagihan' => 'required',
            'jumlah_tagihan' => 'required',
            'id_kategori_anggota' =>'required',
        ]);

        Tagihan::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Tagihan $tagihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tagihan = Tagihan::find($id);
        $kategori_anggota = KategoriAnggota::all();
        return view('tagihan.edit', compact('tagihan', 'kategori_anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tagihan $tagihan)
    {
        $update = [
            'nama_tagihan' => $request->nama_tagihan,
            'jumlah_tagihan' => $request->jumlah_tagihan,
            'id_kategori_anggota' => $request->id_kategori_anggota,
        ];
        $tagihan->update($update);
        return redirect()->route('tagihan.index')->with('Sukses', 'Berhasil Edit Tagihan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tagihan $tagihan)
    {
        $tagihan->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Tagihan');
    }
}
