<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    use HasFactory;

    protected $table = 'visi';
    protected $fillable = [
        'judul_visi',
        'deskripsi_visi',
        'icon_visi'
    ];
    // protected $guarded = ['id'];
}
