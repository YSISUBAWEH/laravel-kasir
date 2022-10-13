<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
 public function index()
    {
        $pelanggan = Pelanggan::all();
        return view ('welcome' ,['pelanggan' => $pelanggan]);
    }
    public function tambahPelanggan(Request $request)
    {
        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
            'no_ktp' => $request->no_ktp
        ]);
        return redirect('/');
    }
    public function hapusPelanggan($id){
       $pelanggan = Pelanggan::findOrFail($id);
       $pelanggan->delete();
       return redirect('/');
    }
}
