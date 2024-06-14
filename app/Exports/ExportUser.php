<?php

namespace App\Exports;
use App\Models\IkanProduksi;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IkanProduksi::select( 
        'Nama_Ikan',
        'Jumlah_Produksi',
        'Tanggal_Produksi',
        'Lokasi_Produksi',
        'Harga_Ikan',
        'Pengola_Name',
        'Pengola_Username',
        'Status_Produksi',)->get();
    }
}