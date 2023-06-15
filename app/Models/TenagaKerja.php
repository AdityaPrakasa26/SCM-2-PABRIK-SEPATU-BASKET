<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaKerja extends Model
{
    use HasFactory;
    protected $table = 'tenaga_kerja';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_tenaga_kerja',
    ];

    public function Produksi()
    {
        return $this->hasMany(Produksi::class);
    }
}
