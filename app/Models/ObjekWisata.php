<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjekWisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kategori',
        'judul',
        'lokasi',
        'deskripsi',
        'foto',
    ];
}
