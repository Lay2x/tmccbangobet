<?php

namespace App\Http\Controllers;

use App\Models\KategoriAdmin;
use Illuminate\Http\Request;

class KategoriAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_admin = KategoriAdmin::all();
        $title = 'Data Kategori Admin';
        return view('kategori_admin.index', compact('title', 'kategori_admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Admin';
        return view('kategori_admin.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_admin' => 'required'
        ]);
        KategoriAdmin::create($request->all());
        return redirect()->route('kategori_admin.index')->with('Sukses', 'Berhasil Tambah Kategori Admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriAdmin $kategori_admin)
    {
        $title = 'Detail Kategori Admin';
        return view('kategori_admin.show', compact('title', 'kategori_admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriAdmin $kategori_admin)
    {
        $title = 'Edit Kategori Admin';
        return view('kategori_admin.edit', compact('title', 'kategori_admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriAdmin $kategori_admin)
    {
        $update = [
            'nama_kategori_admin' => $request->nama_kategori_admin
        ];
        $kategori_admin->update($update);
        return redirect()->route('kategori_admin.index')->with('Sukses', 'Berhasil Edit Kategori Admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriAdmin $kategori_admin)
    {
        $kategori_admin->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kategori Admin');
    }
}
