<?php

namespace App\Exports;

use App\Pelamar;
use Maatwebsite\Excel\Concerns\FromCollection;

class PelamarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pelamar::all();
    }
}
