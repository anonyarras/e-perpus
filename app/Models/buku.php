<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table ='table_buku';
    public function kategori()
    {
        return $this->belongsTo(kategori::class,'id_kategori');
    }
}
