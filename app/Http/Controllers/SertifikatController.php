<?php

namespace App\Http\Controllers;

use App\Models\KategoriSertifikat;
use App\Models\Sertifikat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sertifikat = DB::table('sertifikats')
        ->join('kategori_sertifikat', 'sertifikats.id_kategori_sertifikat', 'kategori_sertifikat.id_kategori_sertifikat')
        ->join('users', 'sertifikats.id', 'users.id')
        ->get();
        $title = 'Data Sertifikat';
        return view('sertifikat.index', compact('title', 'sertifikat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_sertifikat = KategoriSertifikat::all();
        $user = User::all();
        $title = 'Tambah Sertifikat';
        return view('sertifikat.create', compact('kategori_sertifikat', 'user', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori_sertifikat' => 'required',
            'id' => 'required',
            'nomor_sertifikat' => 'required',
            'keterangan' => 'required',
            'gambar_sertifikat' => 'required:doc, docx, pdf, xls, xlxs, ppt, pptx, pdf',
            'tanggal' => 'required'
            
        ]);
        $file = $request->file('gambar_sertifikat');
        $namafile = 'Sertifikat'.date('Ymdhis').'.'.$request->file('gambar_sertifikat')->getClientOriginalExtension();
        $file->move('file/sertifikat/',$namafile);

        $sertifikat = new Sertifikat();
        $sertifikat->id_kategori_sertifikat = $request->id_kategori_sertifikat;
        $sertifikat->id = $request->id;
        $sertifikat->nomor_sertifikat = $request->nomor_sertifikat;
        $sertifikat->keterangan = $request->keterangan;
        $sertifikat->gambar_sertifikat = $namafile;
        $sertifikat->tanggal = $request->tanggal;
        
        $sertifikat->save();
        return redirect()->route('sertifikat.index')->with('Sukses', 'Berhasil Tambah Sertifikat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertifikat $sertifikat)
    {
        $kategori_sertifikat = KategoriSertifikat::all();
        $user = User::all();
        $title = 'Edit Sertifikat';
        return view('sertifikat.edit', compact('kategori_sertifikat', 'user', 'title', 'sertifikat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        $namafile = $sertifikat->gambar_sertifikat;
        $update = [
            'id_kategori_sertifikat' => $request->id_kategori_sertifikat,
            'id' => $request->id,
            'nomor_sertifikat' => $request->nomor_sertifikat,
            'keterangan' => $request->keterangan,
            'gambar_sertifikat' => $namafile,
            'tanggal' => $request->tanggal,
           
        ];
        if($request->gambar_sertifikat !=""){
            $request->gambar_sertifikat->move('file/sertifikat', $namafile); 
        }
        $sertifikat->update($update);
        return redirect()->route('sertifikat.index')->with('Sukses', 'Berhasil Edit Sertifikat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = Sertifikat::findorfail($id);
        $namafile = $hapus->gambar_sertifikat;
        $file = ('file/sertifikat/').$namafile;
        // cek file:
        if(file_exists($file)){
            @unlink($file);
        }
        // delete data dri database
        $hapus->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Data Sertifikat');
    }
}
