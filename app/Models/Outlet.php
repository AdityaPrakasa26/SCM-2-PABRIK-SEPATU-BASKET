<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'outlet';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_outlet',
        'alamat_outlet',
    ];

    public function Stokbarang()
    {
        return $this->hasMany(StokBarang::class);
    }
}
