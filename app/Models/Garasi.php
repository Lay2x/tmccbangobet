<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garasi extends Model
{
    use HasFactory;

    protected $table = 'isi_garasi';

    protected $fill = ['id_item', 'jenis_item', 'merek_item', 'gambar'];
}
