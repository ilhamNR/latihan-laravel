<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\DB;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $truncate = DB::table('users')->delete();
        return new
         User([
            'name'     => $row[0],
            'email'    => $row[1],
            'city' => $row[2],
        ]);
    }
}
