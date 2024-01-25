<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Konten';
        $konten = DB::table('konten')->orderByDesc()->get();
        return view('konten.index', compact('konten', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Konten';
        return view('konten.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Konten $konten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konten $konten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konten $konten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konten $konten)
    {
        //
    }
}
