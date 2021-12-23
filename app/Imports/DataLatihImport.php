<?php

namespace App\Imports;

use App\Models\DataLatih;
use Maatwebsite\Excel\Concerns\ToModel;

class DataLatihImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DataLatih([
            'no'            => $row[0],
            'tanggal'       => $row[1],
            'suhu_udara'    => $row[2],
            'curah_hujan'   => $row[3],
            'dc'            => $row[4],
        ]);
    }
}
