<?php

namespace App\Imports;

use App\Dekopinda;
use Maatwebsite\Excel\Concerns\ToModel;

class DekopindaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $data)
    {
        return new Dekopinda([
            'no' => $data[0],
            'id_dekopinwil' => $data[1], 
            'nama_dekopinda' => $data[2], 
            'no_sk' => $data[3], 
            'tgl_sk' => $data[4], 
            'nama_ketua' => $data[5], 
            'no_kontak' => $data[6], 
        ]);
    }
}
