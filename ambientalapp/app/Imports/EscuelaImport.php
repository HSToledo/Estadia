<?php

namespace App\Imports;

use App\Models\Escuela;
use Maatwebsite\Excel\Concerns\ToModel;

class EscuelaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Escuela([
            'nombre'=>$row[0],
            'municipio'=>$row[1],
        ]);
    }
}
