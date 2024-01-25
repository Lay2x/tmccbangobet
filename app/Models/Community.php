<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    protected $table = 'community';
    protected $primaryKey = 'id_community';
    protected $fillable = [
        'nama_community',
        'id_chapter',
    ];
}
