<?php

namespace App\Exports;

use App\people;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class PeopleExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return people::all();
    }
}
