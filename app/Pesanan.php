<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'id_kendaraan', 'id_driver', 'lama_pemakaian', 'jumlah_bbm', 'tgl_pakai', 'tgl_selesai'
    ];

    public function kendaraan()
    {
        return $this->belongsTo('App\Kendaraan', 'id_kendaraan', 'id');
    }

    public function driver()
    {
        return $this->belongsTo('App\Driver', 'id_driver', 'id');
    }
}
