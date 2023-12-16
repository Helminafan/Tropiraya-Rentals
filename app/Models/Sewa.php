<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    protected $table = 'sewa';
    protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id', 'id_sewa' );
    }
}
