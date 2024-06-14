<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IkanProduksi extends Model
{
    protected $table = 'view_produksi_perikanan';

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
        'ID_Ikan',
    ];

    public $timestamps = true; // This is the default, so you can omit it if you want
}
