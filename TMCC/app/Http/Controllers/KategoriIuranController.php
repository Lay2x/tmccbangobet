<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;

use App\Models\Iuran;


class KategoriIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('kategori_iuran')->get();
        return view('kategori_iuran/index', [
            'title' => 'Data Kategori Iuran',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = DB::table('jenis_iuran')->get();
        return view('kategori_iuran/create', [
            'title' => 'Tambah Data Iuran',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_iuran' => 'required',
            'jumlah_tagihan' => 'required'
        ]);

        DB::table('kategori_iuran')->insert([
            'jenis_kategori_iuran' => $request->jenis_iuran,
            'nominal' => $request->jumlah_tagihan
        ]);

        return redirect('kategori_iuran')->with('Tambah', 'Data Berhasil ditambahkan!');
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
        //
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
        DB::table('kategori_iuran')->where('id_kategori_iuran', $id)->delete();
        return redirect('kategori_iuran')->with('delete', 'Data Berhasil dihapus!');
    }
}
