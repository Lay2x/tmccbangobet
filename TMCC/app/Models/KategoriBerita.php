<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $table = 'kategori_berita';
    protected $primaryKey = 'id_kategori_berita';
    public $timestamps = true;
    protected $fillable = [
        'nama_kategori_berita'
    ];
}
