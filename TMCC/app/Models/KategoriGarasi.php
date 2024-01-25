<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGarasi extends Model
{
    use HasFactory;

    protected $table = 'kategori_garasi';
    protected $guarded = ['id'];
}
