<?php

namespace App\Exports;

use App\Jurusan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class JurusanExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jurusan::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Fakultas Id',
            'Nama Jurusan',
            'Created At',
            'Updated At'
        ];
    }
}
