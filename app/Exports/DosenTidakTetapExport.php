<?php

namespace App\Exports;

use App\DosenTidakTetapModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenTidakTetapExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DosenTidakTetapModel::all();
    }
}
