<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriIuran extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'kategori_iuran';
    protected $primaryKey = 'id_kategori_iuran';
    public $timestamps = true;
    protected $fillable = [
        'nama_kategori_iuran'
    ];
}
