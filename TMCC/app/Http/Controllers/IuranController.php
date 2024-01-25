<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class IuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->id_kategori_admin == 1) {
            $data = DB::table('users')
                ->join('iuran', 'users.id', '=', 'iuran.user_id')
                ->get();
        } else {
            $data = DB::table('users')
                ->join('iuran', 'users.id', '=', 'iuran.user_id')
                ->where('iuran.user_id', '=', Auth::user()->id)
                ->get();
        }

        return view('iuran/index', [
            'title' => 'Data Iuran',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // relasi tabel iuran dengan user
        // $users = DB::table('iurans')
        //     ->join('users', 'users.id', '=', 'iurans.id_user')
        //     ->where('iurans.id_user', '=', 'users.id')
        //     ->get();

        // $data_iuran = DB::table('kategori_iuran')->get();
        // $data = DB::table('bulan')->get();
        // $data_jenis_iuran = DB::table('jenis_iuran')->get();
        // return view('iuran/create', [
        //     'title' => 'Tambah Data Iuran',
        //     'data' => $data,
        //     'data_iuran' => $data_iuran,
        //     'jenis_iuran' => $data_jenis_iuran
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bulan = Carbon::now('m');

        $user = DB::table('users')->get();

        $kategori_iuran = DB::table('kategori_iuran')->where(
            'jenis_kategori_iuran',
            '=',
            'Iuran Bulanan'
        )->first();

        foreach ($user as $row) {
            $iuran = new Iuran();
            $iuran->user_id = $row->id;
            $iuran->jenis_iuran = $kategori_iuran->jenis_kategori_iuran;
            $iuran->jumlah_tagihan = $kategori_iuran->nominal;
            $iuran->status = 'Belum Bayar';
            $iuran->jatuh_tempo = Carbon::parse($bulan)->addMonth()->format('Y-m-t');
            $iuran->save();
        }

        return redirect('iuran')->with('tambah', 'Data Iuran Berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Iuran $iuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = DB::table('users')
            ->join('iuran', 'users.id', '=', 'iuran.user_id')
            ->get();

        $oldData = DB::table('jenis_iuran')->get();
        return view('iuran.ubah', [
            'title' => 'Form ubah data iuran',
            'data' => $data,
            'oldData' => $oldData
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Iuran $iuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iuran $iuran)
    {
        //
    }

    public function bayar($id)
    {
        $data = DB::table('iuran')->where('user_id', '=', $id)->get();
        return view('iuran.bayar', [
            'title' => 'Form Pembayaran Iuran',
            'data' => $data
        ]);
    }

    public function pembayaran(Request $request)
    {
        $request->validate([
            'struk_pembayaran' => 'image|required'
        ]);

        // upload file
        $file = $request->file('struk_pembayaran');
        $namafile = 'pembayaran' . date('Ymdhis') . '.' . $request->file('struk_pembayaran')->getClientOriginalExtension();

        $file->move('file/struk pembayaran/', $namafile);

        DB::table('iuran')->where('user_id', '=', $request->user_id)->update([
            'status' => 'Menunggu Konfirmasi',
            'struk_pembayaran' => $namafile
        ]);

        return redirect('iuran')->with('update', 'Pembayaran berhasil!, Silahkan mengecek status pembayaran secara berkala');
    }

    public function verifikasi($id)
    {
        DB::table('iuran')->where('user_id', '=', $id)->update([
            'status' => 'Lunas'
        ]);

        return redirect('iuran')->with('Verifikasi', 'Verifikasi Pembayaran Sukses!');
    }
}
