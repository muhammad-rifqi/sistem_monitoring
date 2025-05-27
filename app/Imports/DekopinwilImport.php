<?php

namespace App\Imports;

use App\Dekopinwil;
use Maatwebsite\Excel\Concerns\ToModel;

class DekopinwilImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dekopinwil([
            'no' => $row[0],
            'nama_dekopinwil' => $row[1], 
            'no_sk' => $row[2], 
            'tgl_sk' => $row[3], 
            'nama_ketua' => $row[4], 
            'no_kontak' => $row[5], 
        ]);
    }
}
