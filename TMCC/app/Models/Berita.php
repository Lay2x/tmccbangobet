<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    public $timestamps = true;
    protected $fillable = [
        'judul_berita',
        'isi_berita',
        'gambar_berita',
        'slug_berita',
        'user_id',
        'id_kategori_berita',
        'tgl_berita',
    ];
}
