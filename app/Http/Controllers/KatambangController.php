<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\StatusPesanan;
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
        $katambangId = Auth::user()->id;
        
        $allPesanan = StatusPesanan::where('id_user', $katambangId)->get();

        return view('katambang.index', compact('allPesanan', 'katambangId'));
    }

    public function updatePesanan($id)
    {
        $katambangId = Auth::user()->id;
        
        $statusPesanan = StatusPesanan::where('id_user', $katambangId)->where('id_pesanan', $id);

        // if ($statusPesanan->get()) {
        $statusPesanan->update([
            'status' => 'disetujui'
        ]);
        // }

       return back();
    }
}
