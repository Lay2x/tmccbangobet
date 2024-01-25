<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAdmin extends Model
{
    use HasFactory;
    protected $table = 'kategori_admin';
    protected $primaryKey = 'id_kategori_admin';
    public $timestamps = true;
    protected $fillable =[
        'nama_kategori_admin'
    ];
}
