<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    use HasFactory;
    protected $table = 'stok_barang';
    protected $primarykey = "id";
    protected $fillable = [
        'id_barang',
        'id_kategori_barang',
        'id_gudang',
        'id_outlet',
        'jumlah_stok',
    ];

    public function RGudang()
    {
        return $this->belongsTo(Gudang::class, 'id_gudang');
    }

    public function ROutlet()
    {
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }

    public function RBarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
