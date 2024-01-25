<?php

namespace App\Http\Controllers;

use App\Models\PenjualanProduk;
use App\Models\User;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Penjualan Produk';
        $penjualan_produk = DB::table('penjualan_produks')
        ->join('users', 'penjualan_produks.id_user', 'users.id')
        ->join('produk', 'penjualan_produks.id_produk', 'produk.id_produk')
        ->join('kategori_produk', 'penjualan_produks.id_kategori_produk', 'kategori_produk.id_kategori_produk')
        ->get();
        return view('penjualan_produk.index', compact('title', 'penjualan_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = DB::table('users')->whereNotNull('id_kategori_anggota')->get();
        $kategori_produk = KategoriProduk::all();
        $produk = DB::table('produk')->whereNotNull('id_kategori_produk')->get();
        $title = 'Tambah Penjualan Produk';
        return view('penjualan_produk.create', compact('anggota', 'produk', 'kategori_produk', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi!!!',
            'confirmed' => 'Isian password tidak sama dengan konfirmasi password!!!',
        ];
        $request->validate([
            'tanggal_penjualan_produk' => 'required',
            'id_user' => 'required',
            'id_produk' => 'required',
            'id_kategori_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
        ], $messages);
        PenjualanProduk::create($request->all());
        return redirect()->route('penjualan_produk.index')->with('Sukses', 'Berhasil Tambah Penjualan Produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(PenjualanProduk $penjualan_produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penjualan_produk = PenjualanProduk::find($id);
        $anggota = DB::table('users')->whereNotNull('id_kategori_anggota')->get();
        $kategori_produk = KategoriProduk::all();
        $produk = DB::table('produk')->whereNotNull('id_kategori_produk')->get();
        $title = 'Edit Penjualan Produk';
        return view('penjualan_produk.edit', compact('penjualan_produk', 'anggota', 'produk', 'kategori_produk', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $penjualan_produk = PenjualanProduk::findorfail($id);
        $messages = [
            'required' => ':attribute wajib diisi!!!',
            'confirmed' => 'Isian password tidak sama dengan konfirmasi password!!!',
        ];
        $request->validate([
            'tanggal_penjualan_produk' => 'required',
            'id_user' => 'required',
            'id_produk' => 'required',
            'id_kategori_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
        ], $messages);
        $penjualan_produk->update($request->all());
        return redirect()->route('penjualan_produk.index')->with('Sukses', 'Berhasil Edit Penjualan Produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penjualan_produk = PenjualanProduk::find($id);
        $penjualan_produk->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Data Penjualan Produk');
    }
}
