<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{

     use HasFactory;
    protected $table = 'kategories';
    protected $guarded = [];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
