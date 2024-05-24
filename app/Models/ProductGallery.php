<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerikananGallery extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = ["ID_Produksi", "URL_Gambar", "is_featured"];

    /**
     * Get the production associated with the gallery.
     */
    public function produksi()
    {
        return $this->belongsTo(Perikanan::class, 'ID_Produksi', 'ID_Produksi');
    }
}
