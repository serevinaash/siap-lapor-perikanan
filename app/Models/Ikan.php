<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    use HasFactory;

    // Define the table name if it's different from the pluralized form of the model name
    protected $table = 'ikan';

    // Define the fillable fields
    protected $fillable = ['Nama_Ikan'];
}
