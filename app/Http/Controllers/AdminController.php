<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Kendaraan;
use App\Pesanan;
use App\StatusPesanan;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $allDriver = Driver::all();
        $allKendaraan = Kendaraan::all();
        $allKatambang = User::where('id_role', '3')->get();

        return view('admin.index', compact('allDriver', 'allKendaraan', 'allKatambang'));
    }

    public function buatPesanan(Request $request)
    {
        Pesanan::create([
            'id_kendaraan' => $request->kendaraan,
            'id_driver' => $request->driver,
            'lama_pemakaian' => $request->lamaPakai,
            'jumlah_bbm' => $request->bbm,
            'tgl_pakai' => $request->pakai,
            'tgl_selesai' => $request->selesai,
        ]);

        $pesananTerbaru = Pesanan::orderBy('id', 'desc')->first();
        $level = User::where('id', $request->katambang)->first();

        StatusPesanan::create([
            'id_pesanan' => $pesananTerbaru->id,
            'id_user' => $request->katambang,
            'level' => $level->role->nama_role,
            'status' => 'menunggu'
        ]);

        return back();
    }
}
