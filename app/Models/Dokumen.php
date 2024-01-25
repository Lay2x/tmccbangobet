<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumen';
    protected $primaryKey = 'id_dokumen';
    public $timestamps = true;
    protected $fillable = [
        'nama_dokumen',
        'id_kategori_dokumen',
        'nomor_dokumen',
        'file_dokumen'
    ];
}
