<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;
    protected $table = 'produksi';
    protected $primarykey = "id";
    protected $fillable = [
        'id_bahan_baku',
        'id_tenaga_kerja',
        'id_barang',
        'jumlah_produksi',
        'tanggal_produksi'
    ];

    public function RBahanBaku()
    {
        return $this->belongsTo(BahanBaku::class, 'id_bahan_baku');
    }

    public function RTenagaKerja()
    {
        return $this->belongsTo(TenagaKerja::class, 'id_tenaga_kerja');
    }

    public function RBarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function Stokproduksi()
    {
        return $this->hasMany(StokProduksi::class);
    }
}
