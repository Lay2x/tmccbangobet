<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    protected $table = 'motor';
    protected $primaryKey = 'id_motor';
    public $timestamps = true;
    protected $fillable = [
        'nama_motor',
        'id',
        'nomor_plat',
        'gambar_motor'
    ];
}
