<?php

namespace App\Imports;

use App\Models\mhs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MhsImport implements ToModel,WithHeadingRow
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mhs([
            'nim'           => $row['nim'] ?? null,
            'nama'          => $row['nama'] ?? null, 
            'tahun'         => $row['tahun'] ?? null, 
            'semester'      => $row['semester'], 
            'jumlahsks'      => $row['jumlahsks'], 
            'ipk'           => $row['ipk'], 
            

            //
        ]);
    }
}
