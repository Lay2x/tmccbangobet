<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class UlangTahunController extends Controller
{
    public function ultah()
    {
    $month = date('Y-m');
        $bulan = Carbon::now()->month;
        $hbd = DB::table('users')
        ->where('tanggal_lahir', '<=', $bulan)
        ->orderBy('tanggal_lahir')
        ->get();
        $hbd = User::whereMonth('tanggal_lahir', $bulan)->get();

        $title = 'Data Ulang Tahun Anggota';
        return view('ulang_tahun.index', compact('bulan', 'hbd', 'title','month'));
    }
}
