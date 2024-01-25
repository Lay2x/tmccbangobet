<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;
    protected $table = 'kas';
    protected $primaryKey = 'id_kas';
    protected $fillable = [
        'keterangan_kas',
        'debit_kas',
        'kredit_kas',
        'tanggal_kas',
    ];
}
