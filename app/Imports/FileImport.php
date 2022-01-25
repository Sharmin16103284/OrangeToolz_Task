<?php

namespace App\Imports;

use App\Models\Files;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FileImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Files([
            'number' => $row['number'],
            // 'first_name' => $row['first_name'],
            // 'last_name' => $row['last_name'],
            // 'email' => $row['email'],
            // 'state' => $row['state'],
            // 'zip' => $row['zip'],
        ]);
    }
}
