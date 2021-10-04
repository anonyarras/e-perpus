<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;
    protected $table = 'table_pinjam';
    public function buku()
    {
        return $this->belongsTo(buku::class,'id_buku');

    }
    public function anggota()
    {
        return $this->belongsTo(anggota::class,'id_anggota');

    }
}
