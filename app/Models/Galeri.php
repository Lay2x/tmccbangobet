<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    protected $primaryKey = 'id_galeri';
    public $timestamps = true;
    protected $fillable = [
        'nama_galeri',
        'gambar_galeri',
        'kategori_galeri',
    ];
}
