<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Region;
use App\Models\Chapter;
use App\Models\Pusat;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $community = DB::table('community')
        ->join('chapter', 'community.id_chapter', 'chapter.id_chapter')
        ->join('region', 'chapter.id_region', 'region.id_region')
        ->join('pusat', 'region.id_pusat', 'pusat.id_pusat')
        ->get();
        $title = 'Community';
        return view('community.index', compact('title', 'community'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Community';
        $pusat = DB::table('pusat')->get();
        $region = Region::all();
        $chapter = Chapter::all();
        return view('community.create', compact('title', 'pusat', 'region', 'chapter')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_community' => 'required',
            'id_chapter' => 'required'
        ]);
        Community::create($request->all());
        return redirect()->route('community.index')->with('Sukses', 'Berhasil Tambah Community');
    }

    /**
     * Display the specified resource.
     */
    public function show(Community $community)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Community $community)
    {
        $pusat = Pusat::all();
        $region = Region::all();
        $chapter = Chapter::all();
        $title = 'Edit Community';
        return view('community.edit', compact('pusat', 'region', 'chapter', 'title', 'community'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Community $community)
    {
        $update = [
            'id_chapter' => $request->id_chapter,
            'nama_commmunity' => $request->nama_community,
        ];
        $community->update($update);
        return redirect()->route('community.index')->with('Sukses', 'Berhasil Edit Community');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Community $community)
    {
        $community->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Community');
    }
    public function fetchRegion(Request $request)
    {
        $data['region'] = Region::where("id_pusat",$request->id_pusat)->get(["nama_region", "id_region"]);
        return response()->json($data);
    }
    public function fetchChapter(Request $request)
    {
        $data['chapter'] = Chapter::where("id_region",$request->id_region)->get(["nama_chapter", "id_chapter"]);
        return response()->json($data);
    }
}
