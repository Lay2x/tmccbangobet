<?php

namespace App\Http\Controllers;

use App\Models\KategoriKaryawan;
use Illuminate\Http\Request;

class KategoriKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kategori Karyawan';
        $kategori_karyawan = KategoriKaryawan::all();
        return view('kategori_karyawan.index', compact('kategori_karyawan', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Karyawan';
        return view('kategori_karyawan.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_karyawan' => 'required'
        ]);
        KategoriKaryawan::create($request->all());
        return redirect()->route('kategori_karyawan.index')->with('Sukses', 'Berhasil Tambahkan Kategori Karyawan');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriKaryawan $kategoriKaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriKaryawan $kategori_karyawan)
    {
        $title = 'Edit Kategori Karyawan';
        return view('kategori_karyawan.edit', compact('kategori_karyawan', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriKaryawan $kategori_karyawan)
    {
        $update = [
            'nama_kategori_karyawan'
        ];
        $kategori_karyawan->update($update);
        return redirect()->route('kategori_karyawan.index')->with('Sukses', 'Berhasil Edit Kategori Karyawan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriKaryawan $kategori_karyawan)
    {
        $kategori_karyawan->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kategori Karyawan');
    }
}
