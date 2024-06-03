<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IkanProduksi extends Model
{
    protected $table = 'view_produksi_perikanan'; // Specify your table name here

    protected $fillable = [
        'ID_Produksi',
        'Nama_Ikan',
        'Deskripsi',
        'Kategori_Ikan',
        'Jumlah_Produksi',
        'Tanggal_Produksi',
        'Lokasi_Produksi',
        'Harga_Ikan',
        'Pengola_Produksi',
        'Status_Produksi',
    ];
}

