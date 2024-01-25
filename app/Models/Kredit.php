<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;
    protected $table = 'kredit';
    protected $primaryKey = 'id_kredit';
    protected $fillable = [
        'nominal_kredit',
        'tanggal_kredit',
        'keterangan_kredit',
    ];
}
