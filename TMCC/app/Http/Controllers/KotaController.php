<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kota = DB::table('kota')
        ->join('provinsi', 'kota.id_provinsi', 'provinsi.id_provinsi')
        ->get();
        $title = 'Data Kota';
        return view('kota.index', compact('title', 'kota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kota';
        $provinsi = Provinsi::all();
        return view('kota.create', compact('title', 'provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_provinsi' => 'required',
            'nama_kota' => 'required',
        ]);
        $kota = new Kota();
        $kota->id_provinsi = $request->id_provinsi;
        $kota->nama_kota = $request->nama_kota;
        $kota->save();
        return redirect()->route('kota.index')->with('Sukses', 'Berhasil Tambahkan Kota');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kota = Kota::find($id);
        $title = 'Edit Kota';
        $provinsi = Provinsi::all();
        return view('kota.edit', compact('kota', 'title', 'provinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kota = Kota::findorfail($id);
        $update = [
            'id_provinsi' => $request->id_provinsi,
            'nama_kota' => $request->nama_kota,
        ];
        $kota->update($update);
        return redirect()->route('kota.index')->with('Sukses', 'Berhasil Edit Kota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kota = Kota::findorfail($id);
        $kota->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kota');
    }
}
