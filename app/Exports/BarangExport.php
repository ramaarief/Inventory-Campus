<?php

namespace App\Exports;

use App\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BarangExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::select('id', 'ruangan_id', 'name', 'total', 'broken', 'created_by', 'updated_by', 'created_at', 'updated_at')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Ruangan Id',
            'Nama Barang',
            'Total',
            'Rusak',
            'Created_by',
            'Updated_by',
            'Created At',
            'Updated At'
        ];
    }
}
