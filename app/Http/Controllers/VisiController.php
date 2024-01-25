<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi;
use Illuminate\Support\Facades\DB;
use File;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visi = DB::table('visi')->get();
        return view('visi.index', [
            'title' => 'Data Visi',
            'data' => $visi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $visi = Visi::all();
        return view('visi.create', [
            'title' => 'Data Visi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi inputan
        $validatedData = $request->validate([
            'judul_visi' => 'required',
            'deskripsi_visi' => 'required',
            'icon' => 'image|file|max:1024'
        ]);

        // upload file
        $file = $request->file('icon_visi');
        $namafile = 'visi' . date('Ymdhis') . '.' . $request->file('icon_visi')->getClientOriginalExtension();
        $file->move('file/visi/', $namafile);

        // insert ke database
        $visi = new Visi();
        $visi->judul_visi = $request->judul_visi;
        $visi->deskripsi_visi = $request->deskripsi_visi;
        $visi->icon_visi = $namafile;
        $visi->save();
        return redirect('visi')->with('tambah', 'Data Berhasil ditambahkan');
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
        $data = DB::table('visi')->where('id_visi', '=', $id)->get();

        return view('visi.ubah', [
            'title' => 'Ubah Data Visi',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = DB::table('visi')->where('id_visi', '=', $id)->get();
        $validatedData = $request->validate([
            'judul_visi' => 'required',
            'deskripsi_visi' => 'required'

        ]);

        if ($request->file('icon_visi')) {
            $file = $request->file('icon_visi');
            $namaFile = rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
            $file->move('file/visi/', $namaFile);

            DB::table('visi')->where('id_visi', $id)->update([
                'judul_visi' => $request->judul_visi,
                'deskripsi_visi' => $request->deskripsi_visi,
                'icon_visi' => $namaFile
            ]);
            return redirect('visi')->with('ubah', 'Data Berhasil diubah!');
        }
        $iconLama = $request->iconLama;
        DB::table('visi')->where('id_visi', $id)->update([
            'judul_visi' => $request->judul_visi,
            'deskripsi_visi' => $request->deskripsi_visi,
            'icon_visi' => $iconLama
        ]);
        return redirect('visi')->with('ubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('visi')->where('id_visi', '=', $id)->delete();
        return redirect('visi')->with('hapus', 'Data Berhasil dihapus');
    }
}
