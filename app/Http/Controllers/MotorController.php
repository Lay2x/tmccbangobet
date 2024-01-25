<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Motor';
        $motor = DB::table('motor')
        ->join('users', 'motor.id', 'users.id')
        ->orderByDesc('motor.id_motor')
        ->get();
        return view('motor.index', compact('title', 'motor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $title = 'Tambah Data Motor';
        return view('motor.create', compact('user', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_motor' => 'required',
            'id' => 'required',
            'nomor_plat' => 'required',
            'gambar_motor' => 'required: png, jpg, jpeg, raw, ai, psd, gif, jfif'
        ]);
        $gambar_motor = $request->file('gambar_motor');
        $namafilemotor = 'Motor'.date('Ymdhis').'.'.$request->file('gambar_motor')->getClientOriginalExtension();
        $gambar_motor->move('file/motor/',$namafilemotor);

        $motor = new Motor();
        $motor->nama_motor = $request->nama_motor;
        $motor->id = $request->id;
        $motor->nomor_plat = $request->nomor_plat;
        $motor->gambar_motor = $namafilemotor;
        $motor->save();

        return redirect()->route('motor.index')->with('Sukses', 'Berhasil Tambahkan Motor Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Motor $motor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $motor = Motor::find($id);
        $user = User::all();
        $title = 'Edit Motor';
        return view('motor.edit', compact('motor', 'user', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $motor = Motor::findorfail($id);
        $namafilemotor = $motor->gambar_motor;
        $update = [
            'nama_motor' => $request->nama_motor,
            'id' => $request->id,
            'nomor_plat' => $request->nomor_plat,
            'gambar_motor' => $namafilemotor
        ];
        if ($request->gambar_motor != ""){
            $request->gambar_motor->move('file/motor/', $namafilemotor);
        }   
        $motor->update($update);
        return redirect()->route('motor.index')->with('Sukses', 'Berhasil Edit Motor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motor $motor)
    {
        $namafilemotor = $motor->gambar_motor;
        $gambar_motor = ('file/motor/').$namafilemotor;
        if(file_exists($gambar_motor)){
            @unlink($gambar_motor);
        }
        $motor->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Motor');
    }
}
