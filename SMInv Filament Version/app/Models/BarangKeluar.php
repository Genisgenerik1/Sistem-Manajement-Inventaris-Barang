<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangKeluar extends Model
{
     use HasFactory;
     protected $guarded = [];

    public function barang()
    {
        return $this->belongsTo(Barang::class,'barang_id');
    }
     public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
