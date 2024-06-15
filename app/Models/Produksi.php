<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'produksi_perikanan';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'ID_Produksi';

    // Define the properties that can be mass assigned
    protected $fillable = [
        'ID_Ikan',
        'Jumlah_Produksi',
        'Tanggal_Produksi',
        'Lokasi_Produksi',
        'Harga_Ikan',
        'Pengola_Produksi',
        'Status_Produksi',
    ];

    // Define constant for valid status options
    const STATUS_PROSES = 'proses';
    const STATUS_SELESAI = 'selesai';

    public function ikan()
    {
        return $this->belongsTo(Ikan::class, 'ID_Ikan', 'ID_Ikan');
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'Pengola_Produksi', 'id');
    }

    // Mutator to ensure Status_Produksi is lowercase
    public function setStatusProduksiAttribute($value)
    {
        $this->attributes['Status_Produksi'] = strtolower($value);
    }

    // Accessor to capitalize Status_Produksi when retrieving
    public function getStatusProduksiAttribute($value)
    {
        return ucfirst($value);
    }

    // Scope to query records with specific status
    public function scopeStatus($query, $status)
    {
        return $query->where('Status_Produksi', strtolower($status));
    }

    // Validation rule for status attribute
    public static function statusRules()
    {
        return [
            'Status_Produksi' => 'required|string|in:' . self::STATUS_PROSES . ',' . self::STATUS_SELESAI,
        ];
    }

    public $timestamps = false;
}
