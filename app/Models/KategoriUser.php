<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriUser extends Model
{
    use HasFactory;
    protected $table = 'kategori_user';
    protected $primaryKey = 'id_kategori_user';
    public $timestamps = true;
    protected $fillable = [
        'nama_kategori_user'
    ];
}
