<?php

namespace App\Exports;

use App\Models\IkanProduksi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Support\Facades\DB;

class ExportUser implements FromView, WithEvents
{
    public function view(): View
    {
        $data = IkanProduksi::select(
            'Nama_Ikan',
            'Jumlah_Produksi',
            'Tanggal_Produksi',
            'Lokasi_Produksi',
            'Harga_Ikan',
            'Pengola_Name',
            'Pengola_Username',
            'Status_Produksi'
        )->where('Status_Produksi', 'selesai')->get();

        return view('exports.users', [
            'users' => $data
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:H1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                    ]
                ]);
            }
        ];
    }
}
