<?php

namespace App\Exports;

use App\DosenPembimbingModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenPembimbingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DosenPembimbingModel::all();
    }
}
