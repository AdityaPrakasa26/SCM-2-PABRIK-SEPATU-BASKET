<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaProduksi extends Model
{
    use HasFactory;
    protected $table = 'biaya_produksi';
    protected $primarykey = "id";
    protected $fillable = [
        'biaya_bahan_baku',
        'biaya_tenaga_kerja',
        'biaya_produksi_',
        'id_produksi',
    ];

    public function RProduksi()
    {
        return $this->belongsTo(Produksi::class, 'id_produksi');
    }
}
