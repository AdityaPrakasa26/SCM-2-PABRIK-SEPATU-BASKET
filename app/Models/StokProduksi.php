<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokProduksi extends Model
{
    use HasFactory;
    protected $table = 'stok_produksi';
    protected $primarykey = "id";
    protected $fillable = [
        'id_produksi',
        'id_barang',
        'jumlah_stok_produksi',
    ];

    public function RProduksi()
    {
        return $this->belongsTo(Produksi::class, 'id_produksi');
    }

    public function RBarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
