<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSertifikat extends Model
{
    use HasFactory;
    protected $table = 'kategori_sertifikat';
    protected $primaryKey = 'id_kategori_sertifikat';
    public $timestamps = true;
    protected $fillable = [
        'nama_kategori_sertifikat',
        'poin'
    ];
}
