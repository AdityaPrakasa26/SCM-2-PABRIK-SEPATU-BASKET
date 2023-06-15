<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    use HasFactory;
    protected $table = 'bahan_baku';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_bahan_baku',
    ];

    public function Produksi()
    {
        return $this->hasMany(Produksi::class);
    }
}
