<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKaryawan extends Model
{
    use HasFactory;
    protected $table = 'kategori_karyawan';
    protected $primaryKey = 'id_kategori_karyawan';
    public $timestamps = true;
    protected $fillable = [
        'nama_kategori_karyawan'
    ];
}
