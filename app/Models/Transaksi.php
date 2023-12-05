<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    public function pengembalian()
    {
        return $this->belongsTo(Pengembalian::class, 'id', 'id_transaksi' );
    }
    public function pengembalianSewa()
    {
        return $this->belongsTo(Sewa::class, 'id_sewa', 'id' );
    }
}
