<?php

namespace App\Exports;

use App\Credit;
use Maatwebsite\Excel\Concerns\FromCollection;

class CreditExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Credit::all();
    }
}
