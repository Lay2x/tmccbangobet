<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;
    protected $table = 'sertifikats';
    protected $primaryKey = 'id_sertifikat';
    public $timestamps = true;
    protected $fillable = [
        'id_kategori_sertifikat',
        'id',
        'nomor_sertifikat',
        'keterangan',
        'gambar_sertifikat',
        'tanggal',
        
    ];

}
