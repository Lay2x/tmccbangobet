<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KreditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kredit / Pengeluaran';
        $kredit = Kredit::all();
        return view('kredit.index', compact('kredit', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kredit / Pengeluaran';
        return view('kredit.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi!!!',
        ];
        $request->validate([
            'nominal_kredit' => 'required',
            'tanggal_kredit' => 'required',
            'keterangan_kredit' => 'required',
        ], $messages);
        $kredit = new Kredit();
        $kredit->nominal_kredit = $request->nominal_kredit;
        $kredit->tanggal_kredit = $request->tanggal_kredit;
        $kredit->keterangan_kredit = $request->keterangan_kredit;
        $kredit->save();
        return redirect()->route('kredit.index')->with('Sukses', 'Berhasil Tambah Pengeluaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kredit $kredit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kredit $kredit)
    {
        $title = 'Edit Pengeluaran';
        return view('kredit.edit', compact('title', 'kredit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kredit $kredit)
    {
        $update = [
            'nominal_kredit' => $request->nominal_kredit,
            'tanggal_kredit' => $request->tanggal_kredit,
            'keterangan_kredit' => $request->keterangan_kredit,
        ];
        $kredit->update($update);
        return redirect()->route('kredit.index')->with('Sukses', 'Berhasil Update Pengeluaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kredit $kredit)
    {
        $kredit->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Kredit');
    }
}
