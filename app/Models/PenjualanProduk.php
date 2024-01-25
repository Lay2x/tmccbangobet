<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanProduk extends Model
{
    use HasFactory;
    protected $table = 'penjualan_produks';
    protected $primaryKey = 'id_penjualan_produk';
    protected $fillable = [
        'tanggal_penjualan_produk',
        'id_user',
        'id_produk',
        'id_kategori_produk',
        'harga_produk',
        'stok_produk',
    ];
}
