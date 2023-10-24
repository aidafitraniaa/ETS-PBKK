<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis barang',
        'kondisi barang',
        'keterangan barang',
        'kecacatan barang',
        'jumlah barang',
        'foto'
    ];
}