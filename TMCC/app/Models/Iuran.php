<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    protected $table = 'iuran';
    protected $fillable = ['id_user', 'jenis_iuran', 'jumlah_tagihan', 'status', 'jatuh_tempo', 'sturk_pembayaran'];
}
