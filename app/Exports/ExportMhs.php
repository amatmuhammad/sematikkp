<?php

namespace App\Exports;

use App\Models\mhs;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExportMhs implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return mhs::orderBy('tahun', 'asc')->get();
    }

    public function headings(): array{
        return ['id',
                'nim',
                'nama',
                'tahun',
                'semester',
                'Jumlahsks',
                'Ipk',
            ];
    }
}
