<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;
    protected $table = 'tagihan';
    protected $primaryKey = 'id_tagihan';
    protected $fillable = [
        'nama_tagihan',
        'jumlah_tagihan',
        'id_kategori_anggota',
    ];
}
