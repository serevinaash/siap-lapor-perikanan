<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perikanan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produksi_perikanan';

    protected $fillable = [
        'ID_Ikan',
        'Jumlah_Produksi',
        'Tanggal_Produksi',
        'Lokasi_Produksi',
        'Harga_Ikan',
        'Pengola_Produksi',
        'Status_Produksi'
    ];

    /**
     * Get the fish associated with the production.
     */
    public function ikan()
    {
        return $this->belongsTo(Ikan::class, 'ID_Ikan', 'ID_Ikan');
    }

    /**
     * Get the user who manages the production.
     */
    public function pengelola()
    {
        return $this->belongsTo(User::class, 'Pengola_Produksi', 'id');
    }

    /**
     * Get the gallery images associated with the production.
     */
    public function galleries()
    {
        return $this->hasMany(Gambar::class, 'ID_Produksi', 'ID_Produksi');
    }
}
