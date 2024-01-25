<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\KategoriDokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Dokumen';
        $dokumen = DB::table('dokumen')
        ->join('kategori_dokumen', 'dokumen.id_kategori_dokumen', 'kategori_dokumen.id_kategori_dokumen')
        ->orderByDesc('dokumen.id_dokumen')
        ->get();
        return view('dokumen.index', compact('title', 'dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_dokumen = KategoriDokumen::all();
        $title = 'Tambah Data Dokumen';
        return view('dokumen.create', compact('kategori_dokumen', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_dokumen' => 'required',
            'id_kategori_dokumen' => 'required',
            'nomor_dokumen' => 'required',
            'file_dokumen' => 'required: doc, docx, pdf, xls, xlxs, ppt, pptx, pdf'
        ]);
        $file_dokumen = $request->file('file_dokumen');
        $namafiledokumen = 'Dokumen'.date('Ymdhis').'.'.$request->file('file_dokumen')->getClientOriginalExtension();
        $file_dokumen->move('file/dokumen/',$namafiledokumen);

        $dokumen = new Dokumen();
        $dokumen->nama_dokumen = $request->nama_dokumen;
        $dokumen->id_kategori_dokumen = $request->id_kategori_dokumen;
        $dokumen->nomor_dokumen = $request->nomor_dokumen;
        $dokumen->file_dokumen = $namafiledokumen;
        $dokumen->save();

        return redirect()->route('dokumen.index')->with('Sukses', 'Berhasil Tambahkan Dokumen Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dokumen = Dokumen::find($id);
        $kategori_dokumen = KategoriDokumen::all();
        $title = 'Edit Kategori Dokumen';
        return view('dokumen.edit', compact('dokumen', 'kategori_dokumen', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokumen $dokumen)
    {
        $namafiledokumen = $dokumen->file_dokumen;
        $update = [
            'nama_dokumen' => $request->nama_dokumen,
            'id_kategori_dokumen' => $request->id_kategori_dokumen,
            'nomor_dokumen' => $request->nomor_dokumen,
            'file_dokumen' => $namafiledokumen
        ];
        if ($request->file_dokumen != ""){
            $request->file_dokumen->move('file/dokumen/', $namafiledokumen);
        }   
        $dokumen->update($update);
        return redirect()->route('dokumen.index')->with('Sukses', 'Berhasil Edit Dokumen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokumen $dokumen)
    {
        $namafiledokumen = $dokumen->file_dokumen;
        $file_dokumen = ('file/dokumen/').$namafiledokumen;
        if(file_exists($file_dokumen)){
            @unlink($file_dokumen);
        }
        $dokumen->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Dokumen');
    }
}
