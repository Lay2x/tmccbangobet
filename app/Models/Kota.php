<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $primaryKey = 'id_kota';
    public $timestamps = true;
    protected $fillable = [
        'id_kota',
        'nama_kota'
    ];
}
