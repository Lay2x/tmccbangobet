<?php

namespace App\Http\Controllers;

use App\Models\KategoriUser;
use Illuminate\Http\Request;

class KategoriUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kategori User';
        $kategori_user = KategoriUser::all();
        return view('kategori_user.index', compact('title', 'kategori_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori User';
        return view('kategori_user.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_user' => 'required'
        ]);
        KategoriUser::create($request->all());
        return redirect()->route('kategori_user.index')->with('Sukses', 'Berhasil Tambah Kategori User');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriUser $kategori_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriUser $kategori_user)
    {
        $title = 'Edit Kategori User';
        return view('kategori_user.edit', compact('title', 'kategori_user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriUser $kategori_user)
    {
        $update = [
            'nama_kategori_user' => $request->nama_kategori_user,
        ];
        $kategori_user->update($update);
        return redirect()->route('kategori_user.index')->with('Sukses', 'Berhasil Edit Kategori User');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriUser $kategori_user)
    {
        $kategori_user->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kategori User');
    }
}
