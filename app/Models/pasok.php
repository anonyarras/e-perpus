<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasok extends Model
{
    use HasFactory;
    protected $table = 'table_pasok';
    public function buku()
    {
        return $this->belongsTo(buku::class,'id_buku');

    }
}
