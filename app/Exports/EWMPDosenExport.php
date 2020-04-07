<?php

namespace App\Exports;

use App\EWMPDosenModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class EWMPDosenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EWMPDosenModel::all();
    }
}
