<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriDokumen extends Model
{
    use HasFactory;
    protected $table = 'kategori_dokumen';
    protected $primaryKey = 'id_kategori_dokumen';
    public $timestamps = true;
    protected $fillable = [
        'nama_kategori_dokumen'
    ];
}
