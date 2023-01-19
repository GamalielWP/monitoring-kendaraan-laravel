<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPesanan extends Model
{
    protected $fillable = [
        'id_pesanan', 'id_user', 'level', 'status'
    ];

    public function pesanan()
    {
        return $this->belongsTo('App\Pesanan', 'id_pesanan', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
