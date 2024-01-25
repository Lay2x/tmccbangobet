<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use Carbon\Carbon;

class DataberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Berita';
        $berita = DB::table('berita')
        ->join('users', 'berita.user_id', 'users.id')
        ->join('kategori_berita', 'berita.id_kategori_berita', 'kategori_berita.id_kategori_berita')
        ->orderByDesc('berita.id_berita')
        ->get();
        return view('data_berita.index', compact('berita', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Berita';
        $kategori_berita = KategoriBerita::all();
        return view('data_berita.create', compact('kategori_berita', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'gambar_berita' => 'required: jpg, jpeg, png, tfif, jfif, raw, gif, ai, psd',
            'id_kategori_berita' => 'required'
        ]);
        $gambar_berita = $request->file('gambar_berita');
        $namagambarberita = 'Berita'.date('Ymdhis').'.'.$request->file('gambar_berita')->getClientOriginalExtension();
        $gambar_berita->move('file/berita/',$namagambarberita);

        $berita = new Berita();
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;
        $berita->gambar_berita = $namagambarberita;
        $berita->slug_berita = Str::slug($request->judul_berita);
        $berita->user_id = Auth::user()->id;
        $berita->id_kategori_berita = $request->id_kategori_berita; 
        $berita->tgl_berita = Carbon::now();
        $berita->save();
        return redirect()->route('data_berita.index')->with('Sukses', 'Berhasil Tambah Berita');
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
    public function edit($id)
    {
        $berita = Berita::find($id);
        $title = 'Edit Berita';
        $kategori_berita = KategoriBerita::all();
        return view('data_berita.edit', compact('kategori_berita', 'title', 'berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findorfail($id);
        $namagambarberita = $berita->gambar_berita;
        $update = [
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'gambar_berita' => $namagambarberita,
            'slug_berita' => Str::slug($request->judul_berita),
            'user_id' => Auth::user()->id,
            'id_kategori_berita' => $request->id_kategori_berita,
            'tgl_berita' => $berita->tgl_berita
        ];
        if ($request->gambar_berita != ""){
            $request->gambar_berita->move(public_path('file/berita/'), $namagambarberita);
        }   
        $berita->update($update);
        return redirect()->route('data_berita.index')->with('Sukses', 'Berhasil Edit Berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $namagambarberita = $berita->gambar_galeri;
        $file_berita = public_path('file/berita/').$namagambarberita;
        if(file_exists($file_berita)){
            @unlink($file_berita);
        }
        $berita->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Berita');
    }
}
