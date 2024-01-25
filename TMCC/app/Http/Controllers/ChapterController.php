<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chapter = DB::table('chapter')
        ->join('region', 'chapter.id_region', 'region.id_region')
        ->join('pusat', 'region.id_pusat', 'pusat.id_pusat')
        ->get();
        $title = 'Data Region';
        return view('chapter.index', compact('chapter', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $region = Region::all();
        $title = 'Tambah Region';
        return view('chapter.create', compact('region', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_region' => 'required',
            'nama_chapter' =>'required'
        ]);
        Chapter::create($request->all());
        return redirect()->route('chapter.index')->with('Sukses', 'Berhasil Tambah Chapter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chapter $chapter)
    {
        $region = Region::all();
        $title = 'Edit Chapter';
        return view('chapter.edit', compact('region', 'chapter', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chapter $chapter)
    {
        $update = [
            'id_region' => $request->id_region,
            'nama_chapter' => $request->nama_chapter,
        ];
        $chapter->update($update);
        return redirect()->route('chapter.index')->with('Sukses', 'Berhasil Update Chapter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Chapter');
    }
}
