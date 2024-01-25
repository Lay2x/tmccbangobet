<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $table = 'konten';
    protected $primaryKey = 'id_konten';
    public $timestaps = true;
    protected $fillable = [
        'judul_konten',
        'placeholder_konten',
        'isi_konten',
    ];
}
