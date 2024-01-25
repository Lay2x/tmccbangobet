<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Misi;
use Illuminate\Support\Facades\DB;
use File;

class MisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $misi = DB::table('misi')->get();
        return view('misi.index', [
            'title' => 'Data Misi',
            'data' => $misi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $misi = misi::all();
        return view('misi.create', [
            'title' => 'Data Misi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi inputan
        $validatedData = $request->validate([
            'judul_misi' => 'required',
            'deskripsi_misi' => 'required',
            'icon' => 'image|file|max:1024'
        ]);

        // upload file
        $file = $request->file('icon_misi');
        $namafile = 'misi' . date('Ymdhis') . '.' . $request->file('icon_misi')->getClientOriginalExtension();
        $file->move('file/misi/', $namafile);

        // insert ke database
        $misi = new Misi();
        $misi->judul_misi = $request->judul_misi;
        $misi->deskripsi_misi = $request->deskripsi_misi;
        $misi->icon_misi = $namafile;
        $misi->save();
        return redirect('misi')->with('tambah', 'Data Berhasil ditambahkan');
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
        $data = DB::table('misi')->where('id_misi', '=', $id)->get();

        return view('misi.edit', [
            'title' => 'Ubah Data Misi',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = DB::table('misi')->where('id_misi', '=', $id)->get();
        $validatedData = $request->validate([
            'judul_misi' => 'required',
            'deskripsi_misi' => 'required'

        ]);

        if ($request->file('icon_misi')) {
            $file = $request->file('icon_misi');
            $namaFile = rand() . '.' . str_replace(" ", "", $file->getClientOriginalExtension());
            $file->move('file/misi/', $namaFile);

            DB::table('misi')->where('id_misi', $id)->update([
                'judul_misi' => $request->judul_misi,
                'deskripsi_misi' => $request->deskripsi_misi,
                'icon_misi' => $namaFile
            ]);
            return redirect('misi')->with('ubah', 'Data Berhasil diubah!');
        }
        $iconLama = $request->iconLama;
        DB::table('misi')->where('id_misi', $id)->update([
            'judul_misi' => $request->judul_misi,
            'deskripsi_misi' => $request->deskripsi_misi,
            'icon_misi' => $iconLama
        ]);
        return redirect('misi')->with('ubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('misi')->where('id_misi', '=', $id)->delete();
        return redirect('misi')->with('hapus', 'Data Berhasil dihapus');
    }
}
