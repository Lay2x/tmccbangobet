<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kas = DB::table('kas')->whereNotNull('tanggal_kas')->get();
        $title = 'Data Kas';
        $debit = DB::table('kas')->whereNotNull('tanggal_kas')->get()->sum('debit_kas');
        $kredit = DB::table('kas')->whereNotNull('tanggal_kas')->get()->sum('kredit_kas');
        $saldo = $debit - $kredit;
        return view('kas.index', compact('kas', 'title', 'saldo', 'kredit', 'debit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Kas $kas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kas $kas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kas $kas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kas $kas)
    {
        //
    }
}
