<?php

namespace App\Exports;

use App\DosenIndustriModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenIndustriExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DosenIndustriModel::all();
    }
}
