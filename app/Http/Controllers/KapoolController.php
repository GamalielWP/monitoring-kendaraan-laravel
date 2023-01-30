<?php

namespace App\Http\Controllers;

use App\StatusPesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KapoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('kapool');
    }

    public function index()
    {
        $kapoolId = Auth::user()->id;
        
        $allPesanan = StatusPesanan::where('id_user', $kapoolId)->get();

        return view('kapool.index', compact('allPesanan', 'kapoolId'));
    }

    public function updatePesanan($id)
    {
        $kapoolId = Auth::user()->id;
        
        $statusPesanan = StatusPesanan::where('id_user', $kapoolId)->where('id_pesanan', $id);
        $checkPesanan = StatusPesanan::where('id_pesanan', $id)->where('level', 'Kepala Tambang')->where('status', 'disetujui')->first();

        if ($checkPesanan) {
            $statusPesanan->update([
                'status' => 'disetujui'
            ]);
        }

       return back();
    }
}
