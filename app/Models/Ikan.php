<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    protected $table = 'ikan';
    protected $primaryKey = 'ID_Ikan';
    public $timestamps = false; // if you don't use timestamps

    protected $fillable = [
        'Nama_Ikan', 'Deskripsi', 'Kategori_Ikan',
    ];
}
