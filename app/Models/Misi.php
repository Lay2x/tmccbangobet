<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $table = 'misi';
    protected $fillable = [
        'judul_misi',
        'deskripsi_misi',
        'icon_misi'
    ];
    // protected $guarded = ['id'];
}
