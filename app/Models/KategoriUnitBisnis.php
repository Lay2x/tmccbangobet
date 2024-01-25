<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriUnitBisnis extends Model
{
    use HasFactory;
    protected $table = 'kategori_unit_bisnis';
    protected $primaryKey = 'id_kategori_unit_bisnis';
    public $timestamps = true;
    protected $fillable = [
        'nama_kategori_unit_bisnis',
    ];
}
