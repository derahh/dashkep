<?php

namespace App\Exports;

use App\DosenTetapModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenTetapExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DosenTetapModel::all();
    }
}
