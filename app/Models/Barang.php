<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primarykey = "id";
    protected $fillable = [
        'id_kategori_barang',
        'nama_barang',
    ];

    public function Kategoribarang()
    {
        return $this->belongsTo(KategoriBarang::class, 'id_kategori_barang');
    }

    public function Stokbarang()
    {
        return $this->hasMany(StokBarang::class);
    }

}
