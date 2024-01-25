<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengurus extends Model
{
    use HasFactory;
    protected $table = 'kategori_pengurus';
    protected $primaryKey = 'id_kategori_pengurus';
    public $timestamps = true;
    protected $fillable = [
        'nama_kategori_pengurus'
    ];
}
