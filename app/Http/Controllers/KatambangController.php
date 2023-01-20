<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Kendaraan;
use App\Pesanan;
use App\StatusPesanan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KatambangController extends Controller
{
    public function __construct()
    {
        $this->middleware('katambang');
    }

    public function index()
    {
        $allDriver = Driver::all();
        $allKendaraan = Kendaraan::all();
        $allKatambang = User::where('id_role', '3')->get();
        $allPesanan = Pesanan::all();

        return view('katambang.index', compact('allDriver', 'allKendaraan', 'allKatambang', 'allPesanan'));
    }

    public function updatePesanan(Request $request, $id)
    {
        $status = StatusPesanan::where('id_pesanan', $id)->where('id_user', Auth::user()->id);

        if ($status->exists()) {
            $status->update([
                'status' => $request->status
            ]);
        }

       return back();
    }
}
