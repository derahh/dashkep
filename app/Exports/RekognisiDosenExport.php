<?php

namespace App\Exports;

use App\RekognisiDosenModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class RekognisiDosenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RekognisiDosenModel::all();
    }
}
