<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataProduksi extends Model
{
    protected $table = 'produksi_perikanan';

    protected $primaryKey = 'ID_Produksi';

    protected $fillable = [
        'ID_Ikan',
        'Jumlah_Produksi',
        'Tanggal_Produksi',
        'Lokasi_Produksi',
        'Harga_Ikan',
        'Pengola_Produksi',
        'Status_Produksi',
    ];

    // Nonaktifkan timestamps
    public $timestamps = false;

    // Define relationships here if any
    public function ikan()
    {
        return $this->belongsTo(Ikan::class, 'ID_Ikan');
    }
}